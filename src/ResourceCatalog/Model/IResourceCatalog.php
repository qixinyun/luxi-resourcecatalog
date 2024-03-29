<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'SXBZXRZRR' => 3,
        'SXBZXRJG' => 4,
        'AJNSR' => 5,
        'TQNMGGZ' => 6,
        'TQSB' => 7,
        'QNWSJGR' => 8,
        'QNWSJZZ' => 9,
        'SCJRQY' => 10,
        'XZZLJ' => 11,
        'QGYXJS' => 12,
        'QGYXSXDY' => 13,

        'RYBZXX' => 14,
        'RYJLXX' => 15,
        'DFXYF' => 16,
        'DFXBMDXXFR' => 17,
        'DFXRMDXXFR' => 18,
        'DFXBMDXXZRR' => 19,
        'DFXRMDXXZRR' => 20,
        'QIYEJBXXNEW' => 21,
        'GTGSHXX' => 22,
        'CMQYSBXX' => 23,
        'YPLSQYXX' => 24,
        'SXQYHMD' => 25,
        'QYYCMLXX' => 26,
        'QYZXXX' => 27,
        'SFJDJGCYRYZGXX' => 28,
        'SFJDJGDJXX' => 29,
        'GZJGJBXX' => 30,
        'GZYXX' => 31,
        'JCFLFWSXX' => 32,
        'LSSWSXX' => 33,
        'LSZYZGZXX' => 34,
        'JSZGXX' => 35,
        'JYJGXINXI' => 36,
        'SJYXXS' => 37,
        'YLBXXX' => 38,
        'YZTQSBXXHMD' => 39,
        'SBQYXX' => 40,
        'GZRYXX' => 41,
        'YZTQNMGGZHMD' => 42,
        'SLGCZBXX' => 43,
        'HSZYZGZXX' => 44,
        'YSZYZCHBGZC' => 45,
        'YSZYZGZXX' => 46,
        'WSHJHSYWYHJCXX' => 47,
        'YLHJSFWJGXX' => 48,
        'JBYFKZJGXX' => 49,
        'WSZYJSZGKSWJXX' => 50,
        'WXHXPQYBHGLQD' => 51,
        'JXSZLJDW' => 52,
        'SLYSXKZXX' => 53,
        'YXZZDWJBGXX' => 54,
        'JDCWFXX' => 55,
        'QSXXFR' => 56,
        'NSXXFR' => 57,
        'QYGSZXXX' => 58,
        'AJNSRXX' => 59,
        'ZDSSWFAJXX' => 60,
        'DBHXX' => 61,
        'SHZZNJXX' => 62,
        'MBFQYML' => 63,
        'SHTTDJXX' => 64,
        'HRBXX' => 65,
        'ZYZXX' => 66,
        'XSPJXX' => 67,
        'SXBZXJGXX' => 68,
        'SXBZXRMD' => 69,
        'LSTDFWBA' => 70,
        'QYYH' => 71,
        'JCFLFWGZZJBXX' => 72,
        'FRGYSYJFXX' => 73,
        'FRTQGYSYFXX' => 74,
        'ZRRGYSYJFXX' => 75,
        'ZRRTQGYSYFXX' => 76,
        
        'NSXXZRR' => 77,
        'QSXXZRR' => 78,
        'ZYJNZSXX' => 79,
        'SYBXXX' => 80,
        'SHJZSXRYMD' => 81,

        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['XFGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['RYBZXX'],
            self::TYPE['RYJLXX'],
            self::TYPE['DFXYF'],
            self::TYPE['DFXBMDXXZRR'],
            self::TYPE['DFXRMDXXZRR'],
            self::TYPE['DFXBMDXXFR'],
            self::TYPE['DFXRMDXXFR'],
        ),
        IUserGroup::ID['XWXCBWMB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX'],
        ),
        IUserGroup::ID['XWZFW'] => array(),
        IUserGroup::ID['XFY'] => array(
            self::TYPE['SXBZXRZRR'],
            self::TYPE['SXBZXRJG'],
            self::TYPE['XSPJXX'],
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD'],
        ),
        IUserGroup::ID['XJCY'] => array(),
        IUserGroup::ID['XGAJ'] => array(self::TYPE['JDCWFXX']),
        IUserGroup::ID['XWXZFXXZX'] => array(),
        IUserGroup::ID['XZFJRB'] => array(),
        IUserGroup::ID['XCZJ'] => array(),
        IUserGroup::ID['XGXJ'] => array(),
        IUserGroup::ID['XJYJ'] => array(
            self::TYPE['QGYXJS'],
            self::TYPE['QGYXSXDY'],
            self::TYPE['JSZGXX'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['SJYXXS'],
        ),
        IUserGroup::ID['XSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
        ),
        IUserGroup::ID['XRSJ'] => array(
            self::TYPE['TQNMGGZ'],
            self::TYPE['TQSB'],
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['XZJJ'] => array(),
        IUserGroup::ID['ZGSL'] => array(),
        IUserGroup::ID['ZGBDST'] => array(),
        IUserGroup::ID['XSLJ'] => array(self::TYPE['SLGCZBXX']),
        IUserGroup::ID['XGDGS'] => array(
            self::TYPE['QYYH'],
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
        ),
        IUserGroup::ID['XLYJ'] => array(),
        IUserGroup::ID['XJTYSB'] => array(self::TYPE['SLYSXKZXX']),
        IUserGroup::ID['XHBJ'] => array(),
        IUserGroup::ID['XSWJ'] => array(),
        IUserGroup::ID['XCGJ'] => array(),
        IUserGroup::ID['XMZJ'] => array(
            self::TYPE['SHJZSXRYMD'],
            self::TYPE['DBHXX'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
        ),
        IUserGroup::ID['XNYJ'] => array(self::TYPE['XZZLJ']),
        IUserGroup::ID['XWGXLJ'] => array(self::TYPE['YXZZDWJBGXX']),
        IUserGroup::ID['XZRZYJ'] => array(),

        IUserGroup::ID['XWJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
        ),
        IUserGroup::ID['XSWJU'] => array(
            self::TYPE['QSXXFR'],
            self::TYPE['NSXXFR'],
            self::TYPE['NSXXZRR'],
            self::TYPE['QSXXZRR'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['AJNSR'],
        ),
        IUserGroup::ID['XTJJ'] => array(),
        IUserGroup::ID['XSCJGJ'] => array(
            self::TYPE['SCJRQY'],
            self::TYPE['QIYEJBXXNEW'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
        ),
        IUserGroup::ID['XYJGLJ'] => array(self::TYPE['WXHXPQYBHGLQD'],),
        IUserGroup::ID['XZWFWGLB'] => array(self::TYPE['LSTDFWBA'],),
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
        IUserGroup::ID['XKJJ'] => array(self::TYPE['JXSZLJDW'],),
        IUserGroup::ID['XRQGS'] => array(
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
        ), 
        IUserGroup::ID['XSWGS'] => array(
            self::TYPE['FRGYSYJFXX'],
            self::TYPE['FRTQGYSYFXX'],
            self::TYPE['ZRRGYSYJFXX'],
            self::TYPE['ZRRTQGYSYFXX'],
        ),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
