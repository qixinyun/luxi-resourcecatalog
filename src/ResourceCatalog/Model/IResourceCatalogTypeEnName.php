<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'xbxzcf',
        IResourceCatalog::TYPE['XBXZXK'] => 'xbxzxk',
        IResourceCatalog::TYPE['SXBZXRZRR'] => 'sxbzxrzrr',
        IResourceCatalog::TYPE['SXBZXRJG'] => 'sxbzxrjg',
        IResourceCatalog::TYPE['AJNSR'] => 'ajnsr',
        IResourceCatalog::TYPE['TQNMGGZ'] => 'tqnmggz',
        IResourceCatalog::TYPE['TQSB'] => 'tqsb',
        IResourceCatalog::TYPE['QNWSJGR'] => 'qnwsjgr',
        IResourceCatalog::TYPE['QNWSJZZ'] => 'qnwsjzz',
        IResourceCatalog::TYPE['SCJRQY'] => 'scjrqy',
        IResourceCatalog::TYPE['XZZLJ'] => 'xzzlj',
        IResourceCatalog::TYPE['QGYXJS'] => 'qgyxjs',
        IResourceCatalog::TYPE['QGYXSXDY'] => 'qgyxsxdy',
        IResourceCatalog::TYPE['TEST'] => 'test',

        IResourceCatalog::TYPE['HRBXX'] => 'hrbxx',
        IResourceCatalog::TYPE['XSPJXX'] => 'xspjxx',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => 'sfjdjgcyryzgxx',
        IResourceCatalog::TYPE['SLGCZBXX'] => 'slgczbxx',
        IResourceCatalog::TYPE['QYYH'] => 'qyyh',
        IResourceCatalog::TYPE['SLYSXKZXX'] => 'slysxkzxx',
        IResourceCatalog::TYPE['SHZZNJXX'] => 'shzznjxx',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => 'yxzzdwjbgxx',
        IResourceCatalog::TYPE['HSZYZGZXX'] => 'hszyzgzxx',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'qygszxxx',
        IResourceCatalog::TYPE['AJNSRXX'] => 'ajnsrxx',
        IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => 'wxhxpqybhglqd',
        IResourceCatalog::TYPE['LSTDFWBA'] => 'lstdfwba',
        IResourceCatalog::TYPE['JXSZLJDW'] => 'jxszljdw',
        IResourceCatalog::TYPE['SXBZXJGXX'] => 'sxbzxjgxx',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'sxbzxrmd',
        IResourceCatalog::TYPE['YLBXXX'] => 'ylbxxx',
        IResourceCatalog::TYPE['JDCWFXX'] => 'jdcwfxx',
        IResourceCatalog::TYPE['GTGSHXX'] => 'gtgshxx',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'cmqysbxx',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'yplsqyxx',
        IResourceCatalog::TYPE['ZYZXX'] => 'zyzxx',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => 'yztqsbxxhmd',
        IResourceCatalog::TYPE['SXQYHMD'] => 'sxqyhmd',
        IResourceCatalog::TYPE['JSZGXX'] => 'jszgxx',
        IResourceCatalog::TYPE['SJYXXS'] => 'sjyxxs',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'jyjgxinxi',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'qyycmlxx',
        IResourceCatalog::TYPE['SBQYXX'] => 'sbqyxx',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => 'sfjdjgdjxx',
        IResourceCatalog::TYPE['GZJGJBXX'] => 'gzjgjbxx',
        IResourceCatalog::TYPE['GZYXX'] => 'gzyxx',
        IResourceCatalog::TYPE['JCFLFWSXX'] => 'jcflfwsxx',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => 'jcflfwgzzjbxx',
        IResourceCatalog::TYPE['LSSWSXX'] => 'lsswsxx',
        IResourceCatalog::TYPE['LSZYZGZXX'] => 'lszyzgzxx',
        IResourceCatalog::TYPE['GZRYXX'] => 'grryxx',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => 'yszyzchbgzc',
        IResourceCatalog::TYPE['YSZYZGZXX'] => 'yszyzgzxx',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => 'wshjhsywyhjcxx',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => 'ylhjsfwjgxx',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => 'jbyfkzjgxx',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => 'wszyjszgkswjxx',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => 'yztqnmggzhmd',
        IResourceCatalog::TYPE['MBFQYML'] => 'mbfqyml',
        IResourceCatalog::TYPE['SHTTDJXX'] => 'shttdjxx',
        IResourceCatalog::TYPE['QYZXXX'] => 'qyzxxx',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => 'zdsswfajxx',
        IResourceCatalog::TYPE['QIYEJBXXNEW'] => 'qiyejbxxnew',
        IResourceCatalog::TYPE['DBHXX'] => 'dbhxx',
        IResourceCatalog::TYPE['DFXBMDXXFR'] => 'dfxbmdxxfr',
        IResourceCatalog::TYPE['DFXRMDXXFR'] => 'dfxrmdxxfr',
        IResourceCatalog::TYPE['DFXBMDXXZRR'] => 'dfxbmdxxzrr',
        IResourceCatalog::TYPE['DFXRMDXXZRR'] => 'dfxrmdxxzrr',
        IResourceCatalog::TYPE['DFXYF'] => 'dfxyf',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => 'frgysyjfxx',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => 'frtqgysyfxx',
        IResourceCatalog::TYPE['NSXXFR'] => 'nsxxfr',
        IResourceCatalog::TYPE['QSXXFR'] => 'qsxxfr',
        IResourceCatalog::TYPE['RYBZXX'] => 'rybzxx',
        IResourceCatalog::TYPE['RYJLXX'] => 'ryjlxx',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => 'zrrgysyjfxx',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => 'zrrtqgysyfxx',
        
        IResourceCatalog::TYPE['NSXXZRR'] => 'nsxxzrr',
        IResourceCatalog::TYPE['QSXXZRR'] => 'qsxxzrr',
        IResourceCatalog::TYPE['ZYJNZSXX'] => 'zyjnzsxx',
        IResourceCatalog::TYPE['SYBXXX'] => 'sybxxx',
        IResourceCatalog::TYPE['SHJZSXRYMD'] => 'shjzsxrymd',
    );
}
