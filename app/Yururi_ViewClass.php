<?php
// vim: foldmethod=marker
/**
 *  Yururi_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Yururi
 */

// {{{ Yururi_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Yururi
 *  @access     public
 */
class Yururi_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Yururi_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

