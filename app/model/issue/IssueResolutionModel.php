<?php
namespace main\app\model\issue;
use main\app\model\BaseDictionaryModel;
/**
 *  问题优先级模型
 *
 */
class IssueResolutionModel extends BaseDictionaryModel
{
	public $prefix = 'issue_';

	public  $table = 'resolution';
	
	const   DATA_KEY = 'issue_resolution/';

    public $fields = '*';

    /**
     * 用于实现单例模式
     * @var self
     */
    protected static $instance;

    /**
     * 创建一个自身的单例对象
     * @param bool $persistent
     * @throws PDOException
     * @return self
     */
    public static function getInstance( $persistent=false )
    {
        if( !isset(self::$instance[intval($persistent)] ) || !is_object( self::$instance[intval($persistent)]) ) {

            self::$instance[intval($persistent)]  = new self( $persistent );
        }
        return self::$instance[intval($persistent)] ;
    }

}