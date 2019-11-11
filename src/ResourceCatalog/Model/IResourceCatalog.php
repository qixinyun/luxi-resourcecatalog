<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{   
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'QNWSJGR' => 8,
        'QNWSJZZ' => 9,
        'SCJRQY' => 10,
        'XZZLJ' => 11,
        'QGYXJS' => 12,
        'QGYXSXDY' => 13,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XFGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['XWXCBWMB'] => array(),
        IUserGroup::ID['XWZFW'] => array(),
        IUserGroup::ID['XFY'] => array(),
        IUserGroup::ID['XJCY'] => array(),
        IUserGroup::ID['XGAJ'] => array(),
        IUserGroup::ID['XWXZFXXZX'] => array(),
        IUserGroup::ID['XZFJRB'] => array(),
        IUserGroup::ID['XCZJ'] => array(),
        IUserGroup::ID['XGXJ'] => array(),
        IUserGroup::ID['XJYJ'] => array(
            self::TYPE['QGYXJS'],
            self::TYPE['QGYXSXDY']
        ),
        IUserGroup::ID['XSFJ'] => array(),
        IUserGroup::ID['XRSJ'] => array(),
        IUserGroup::ID['XZJJ'] => array(),
        IUserGroup::ID['ZGSL'] => array(),
        IUserGroup::ID['ZGBDST'] => array(),
        IUserGroup::ID['XSLJ'] => array(),
        IUserGroup::ID['XGDGS'] => array(),
        IUserGroup::ID['XLYJ'] => array(),
        IUserGroup::ID['XJTYSB'] => array(),
        IUserGroup::ID['XHBJ'] => array(),
        IUserGroup::ID['XSWJ'] => array(),
        IUserGroup::ID['XCGJ'] => array(),
        IUserGroup::ID['XMZJ'] => array(),
        IUserGroup::ID['XNYJ'] => array(self::TYPE['XZZLJ']),
        IUserGroup::ID['XWGXLJ'] => array(),
        IUserGroup::ID['XZRZYJ'] => array(),
        IUserGroup::ID['XWJW'] => array(),
        IUserGroup::ID['XSWJ'] => array(),
        IUserGroup::ID['XTJJ'] => array(),
        IUserGroup::ID['XSCJGJ'] => array(self::TYPE['SCJRQY']),
        IUserGroup::ID['XYJGLJ'] => array(),
        IUserGroup::ID['XZWFWGLB'] => array(),
        IUserGroup::ID['LXNSYH'] => array(),
        IUserGroup::ID['NHLXZH'] => array(),
        IUserGroup::ID['JHLXZH'] => array(),
        IUserGroup::ID['GHLXZH'] => array(),
        IUserGroup::ID['ZHLXZH'] => array(),
        IUserGroup::ID['YZYHLXZH'] => array(),
        IUserGroup::ID['XWSYDWBZBGS'] => array(),
        IUserGroup::ID['LXXSJJ'] => array(),
        IUserGroup::ID['LXXZGH'] => array(),
        IUserGroup::ID['LXXTW'] => array(
            self::TYPE['QNWSJGR'],
            self::TYPE['QNWSJZZ']
        ),
        IUserGroup::ID['XQXJ'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
