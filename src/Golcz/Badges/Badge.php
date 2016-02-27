<?php

namespace Golcz\Badges;

/**
* Badge class
*/
class Badge
{


    /**
     * {{Badge::link($url, $text, $number, $args)}}
     * @param  string $url
     * @param  string $text
     * @param  int $number
     */
    public function link($url, $text, $number, array $args = [])
    {
        $linkWrapper = $this->linkWrapper($url, $args);
        $field = $this->createField($text, $number);

        return str_replace('{{BADGE}}',$field,$linkWrapper);
    }

    /**
     * create badge field
     * @param  string $text
     * @param  int $number
     */
    public function createField($text, $number)
    {
        return $text.' <span class="badge">'.$number.'</span>';
    }

    /**
     * Open link tag
     * @param  string $url
     * @param  array  $args
     */
    protected function linkWrapper($url, array $args = [])
    {
        $class = array_get($args, 'class');
        unset($args['class']);
        $customArgs = $this->getCustomArgs($args);
        return '<a href="'.$url.'"'.$class.' '.$customArgs.'>{{BADGE}}</a>';
    }

    /**
     * Method to generate bages
     * @param  string $type
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    protected function button($type, $text, $number, array $args = [])
    {
        $buttonWrapper = $this->buttonWrapper($text, $type, $args);
        $field = $this->createField($text,$number);

        return str_replace('{{BADGE}}',$field, $buttonWrapper);
    }


    /**
     * Open button tag
     * @param  string $text
     * @param  string $type
     * @param  array  $args
     */
    protected function buttonWrapper($text, $type, array $args =[])
    {
        $class = array_get($args, 'class');
        unset($args['class']);
        $customArgs = $this->getCustomArgs($args);

        return '<button class="'.$class.' btn btn-'.strtolower($type).'" type="button">{{BADGE}}</button>';
    }

    /**
     * Create primary badge
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    public function primary($text, $number, array $args = [])
    {
        return $this->button('primary', $text, $number, $args);
    }

    /**
     * Create danger badge
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    public function danger($text, $number, array $args = [])
    {
        return $this->button('danger', $text, $number, $args);
    }

    /**
     * Create info badge
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    public function info($text, $number, array $args = [])
    {
        return $this->button('info', $text, $number, $args);
    }

    /**
     * Create success badge
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    public function success($text, $number, array $args = [])
    {
        return $this->button('success', $text, $number, $args);
    }

    /**
     * Create warning badge
     * @param  string $text
     * @param  int $number
     * @param  array  $args
     */
    public function warning($text, $number, array $args = [])
    {
        return $this->button('warning', $text, $number, $args);
    }


    /**
     * Get custom arguments from array
     * @param  array  $args
     */
    protected function getCustomArgs(array $args = [])
    {
        $customArgs = "";
        foreach($args as $key => $value){
            $customArgs .= $key.'="'.$value.'" ';
        }
        return $customArgs;
    }
}