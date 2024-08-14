<?php
class block_faceattendance extends block_base
{

    public function init()
    {
        $this->title = get_string('pluginname', 'block_faceattendance');
    }

    public function get_content()
    {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '<a href="https://example.com" class="btn btn-primary">Website</a>';

        return $this->content;
    }

    public function has_config()
    {
        return false;
    }
}
