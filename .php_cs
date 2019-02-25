<?php
$finder = PhpCsFixer\Finder::create()
    ->exclude('bootstrap/cache')
    ->exclude('node_modules')
    ->exclude('storage')
    ->in(__DIR__)
    ->notName('*.blade.php')
    ->notName('.phpstorm.meta.php')
    ->notName('_ide_*.php')
;
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
       '@PSR2' => true,
       'array_syntax' => ['syntax' => 'short'],
       'binary_operator_spaces' => true,
       'blank_line_before_return' => true,
       'cast_spaces' => ['space' => 'none'],
       'concat_space' => ['spacing' => 'one'],
       'function_typehint_space' => true,
       'include' => true,
       'linebreak_after_opening_tag' => true,
       'list_syntax' => ['syntax' => 'long'],
       'mb_str_functions' => true,
       'method_separation' => true,
       'native_function_casing' => true,
       'new_with_braces' => true,
       'no_blank_lines_after_class_opening' => true,
       'no_blank_lines_after_phpdoc' => true,
       'no_empty_comment' => true,
       'no_empty_phpdoc' => true,
       'no_extra_consecutive_blank_lines' => true,
       'no_leading_import_slash' => true,
       'no_leading_namespace_whitespace' => true,
       'no_mixed_echo_print' => ['use' => 'print'],
       'no_multiline_whitespace_before_semicolons' => true,
       'no_null_property_initialization' => true,
       'no_php4_constructor' => true,
       'no_short_bool_cast' => true,
       'no_trailing_comma_in_singleline_array' => true,
       'no_useless_else' => true,
       'no_useless_return' => true,
       'no_whitespace_before_comma_in_array' => true,
       'no_whitespace_in_blank_line' => true,
       'normalize_index_brace' => true,
       'object_operator_without_whitespace' => true,
       'ordered_imports' => true,
       'phpdoc_add_missing_param_annotation' => true,
       'phpdoc_indent' => true,
       'phpdoc_no_empty_return' => true,
       'phpdoc_order' => true,
       'phpdoc_return_self_reference' => true,
       'phpdoc_scalar' => true,
       'phpdoc_types_order' => true,
       'pow_to_exponentiation' => true,
       'protected_to_private' => true,
       'return_type_declaration' => true,
       'self_accessor' => true,
       'semicolon_after_instruction' => true,
       'short_scalar_cast' => true,
       'single_blank_line_before_namespace' => true,
       'single_quote' => true,
       'space_after_semicolon' => true,
       'standardize_not_equals' => true,
       'ternary_operator_spaces' => true,
       'ternary_to_null_coalescing' => false,
       'trailing_comma_in_multiline_array' => true,
       'trim_array_spaces' => true,
   ])
    ->setFinder($finder)
;
