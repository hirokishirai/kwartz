<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4:

// $Rev$
// $Release$
// $Copyright$

require_once 'Kwartz/KwartzConverter.php';
require_once 'Kwartz/KwartzTranslator.php';


/**
 *  directive handler for ePerl
 */
class KwartzEperlHandler extends KwartzHandler {


    function directive_pattern() {
        return '/\A(\w+)(?:\s*\(\s*(.*)\))?\z/';
    }


    function mapping_pattern() {
        return '/\A\'([-:\w]+)\',\s*(.*)\z/';
    }


    function directive_format() {
        return '%s(%s)';
    }


    function handle($handler_arg, &$stmt_list) {
        $ret = parent::handle($handler_arg, $stmt_list);
        if ($ret) return $ret;

        $arg = $handler_arg;
        $d_name = $arg->directive_name;
        $d_arg  = $arg->directive_arg;
        $d_str  = $arg->directive_str;

        switch ($d_name) {

        case 'foreach':  case 'Foreach':  case 'FOREACH':
        case 'list':     case 'List':     case 'LIST':
            $content_only = strtolower($d_name) == 'list';
            if ($content_only) {
                $this->helper->error_if_empty_tag($arg);
            }
            if (! preg_match('/\A(\$\w+)(?:,\s*(\$\w+))?\s+in\s+(.*)\z/', $d_arg, $m)) {
                $msg = "'{$d_str}': invalid argument.";
                throw $this->_error($msg, $arg->stag_info->linenum);
            }
            list($dummy, $loopvar, $loopval, $looplist) = $m;
            $counter = $d_name == 'foreach' || $d_name == 'list' ? null : "{$loopvar}_ctr";
            $toggle  = $d_name != 'FOREACH' && $d_name != 'LIST' ? null : "{$loopvar}_tgl";
            if ($loopval) {
                $looplist2 = preg_replace('/\A%/', '$', $looplist);
                $foreach_code = "foreach my {$loopvar} (keys {$looplist}) {\n"
                              . "     my {$loopval} = {$looplist2}{{$loopvar}};";
            } else {
                $foreach_code = "foreach my {$loopvar} ({$looplist}) {";
            }
            $init_code   = "my {$counter} = 0;";
            $incr_code   = "  {$counter}++;";
            $toggle_code = "  my {$toggle} = {$counter}%2==0 ? {$this->even} : {$this->odd};";
            $this->helper->add_foreach_stmts($stmt_list, $arg, $foreach_code, "}",
                                             $content_only, $counter, $toggle,
                                             $init_code, $incr_code, $toggle_code);
            break;

        case 'while':
            $this->helper->wrap_element_with_native_stmt($stmt_list, $arg,
                                                  "while ({$d_arg}) {", "}", 'while');
            break;

        case 'loop':
            $this->helper->error_if_empty_tag($arg);
            $this->helper->wrap_content_with_native_stmt($stmt_list, $arg,
                                                     "while ({$d_arg}) {", "}", 'while');
            break;

        case 'set':
            $this->helper->wrap_element_with_native_stmt($stmt_list, $arg,
                                                         "{$d_arg};", null, 'set');
            break;

        case 'if':
            $this->helper->wrap_element_with_native_stmt($stmt_list, $arg,
                                                         "if ({$d_arg}) {", "}", 'if');
            break;

        case 'elsif':
        case 'else':
            $last_stmt_kind = $this->helper->last_stmt_kind($stmt_list);
            if ($last_stmt_kind != 'if' && $last_stmt_kind != 'elseif') {
                $msg = "'{$d_str}': previous statement should be 'if' or 'else if'.";
                throw $this->_error($msg, $arg->stag_info->linenum);
            }
            array_pop($stmt_list);    // delete '}'
            $kind = $d_name == 'else' ? 'else' : 'elseif';
            $code = $d_name == 'else' ? "} else {" : "} elsif ({$d_arg}) {";
            $this->helper->wrap_element_with_native_stmt($stmt_list, $arg,
                                                         $code, "}", $kind);
            break;

        case 'default':
        case 'Default':
        case 'DEFAULT':
            $this->helper->error_if_empty_tag($arg);
            $escape = $d_name == 'default' ? null : ($d_name == 'Default');
            $code = "if ({$d_arg}) {";
            $this->helper->add_native_expr_with_default($stmt_list, $arg, $d_arg, $escape,
                                                        $code, "} else {", "}");
            break;

        default:
            return false;
        }

        return true;
    }


}



/**
 *  translator for ePerl
 */
class KwartzEperlTranslator extends KwartzBaseTranslator {


    function __construct($properties=array()) {
        $marks = array(
            '<'.'? ',   ' !>',                   // statement
            '<'.'?= ',  ' !>',                   // expression
            '<'.'?= encode_entities(', ') !>',   // escaped expression
            );
        parent::__construct($marks, $properties);
    }


}


?>