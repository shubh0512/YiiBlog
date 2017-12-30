<?php
/**
 * Created by PhpStorm.
 * User: shubhamnigam
 * Date: 30/12/17
 * Time: 12:57 PM
 */

class _Post extends CActiveRecord
{
        public function rules()
        {
                // NOTE: you should only define rules for those attributes that
                // will receive user inputs.
                return array(
                        array('status', 'in', 'range'=>array(1,2,3)),
                        array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/',
                                'message' => 'Tags can only contain word characters.'),
//                        array('tags', 'normalizeTags'),
                );
        }
}