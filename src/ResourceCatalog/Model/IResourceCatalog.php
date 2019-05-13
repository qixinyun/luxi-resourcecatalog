<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{   
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 95,
        'XBXZXK' => 96,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XFGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['XWXCB'] => array(),
        IUserGroup::ID['XWMB'] => array(),
        IUserGroup::ID['XWZFW'] => array(),
        IUserGroup::ID['XFY'] => array(),
        IUserGroup::ID['XJCY'] => array(),
        IUserGroup::ID['XGAJ'] => array(),
        IUserGroup::ID['XWXZFXXZX'] => array(),
        IUserGroup::ID['XZFJRB'] => array(),
        IUserGroup::ID['XCZJ'] => array(),
        IUserGroup::ID['XGXJ'] => array(),
        IUserGroup::ID['XJYJ'] => array(),
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
        IUserGroup::ID['XMZJ'] => array(),
        IUserGroup::ID['XNYJ'] => array(),
        IUserGroup::ID['XWGXLJ'] => array(),
        IUserGroup::ID['XZRZYJ'] => array(),
        IUserGroup::ID['XWJW'] => array(),
        IUserGroup::ID['XSWJ'] => array(),
        IUserGroup::ID['XTJJ'] => array(),
        IUserGroup::ID['XSCJGJ'] => array(),
        IUserGroup::ID['XYJGLJ'] => array(),
        IUserGroup::ID['XZWFWGLB'] => array(),
        IUserGroup::ID['LXNSYH'] => array(),
        IUserGroup::ID['NHLXZH'] => array(),
        IUserGroup::ID['JHLXZH'] => array(),
        IUserGroup::ID['GHLXZH'] => array(),
        IUserGroup::ID['ZHLXZH'] => array(),
        IUserGroup::ID['YZYHLXZH'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
