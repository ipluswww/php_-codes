<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version102 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('petition', 'style_font_family', 'string', '80', array(
             'notnull' => '1',
             'default' => '"Lucida Sans Unicode", Vardana, Arial',
             ));
        $this->addColumn('petition', 'style_title_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#181716',
             ));
        $this->addColumn('petition', 'style_body_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#666666',
             ));
        $this->addColumn('petition', 'style_button_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#76b235',
             ));
        $this->addColumn('petition', 'style_bg_left_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#e5e5e5',
             ));
        $this->addColumn('petition', 'style_bg_right_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#f2f2f2',
             ));
        $this->addColumn('petition', 'style_footer_color', 'string', '7', array(
             'notnull' => '1',
             'default' => '#f0f0f0',
             ));
    }

    public function down()
    {
        $this->removeColumn('petition', 'style_font_family');
        $this->removeColumn('petition', 'style_title_color');
        $this->removeColumn('petition', 'style_body_color');
        $this->removeColumn('petition', 'style_button_color');
        $this->removeColumn('petition', 'style_bg_left_color');
        $this->removeColumn('petition', 'style_bg_right_color');
        $this->removeColumn('petition', 'style_footer_color');
    }
}