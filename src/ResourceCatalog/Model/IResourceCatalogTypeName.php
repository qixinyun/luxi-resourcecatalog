<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
        IResourceCatalog::TYPE['QNWSJGR'] => '青年五四奖个人',
        IResourceCatalog::TYPE['QNWSJZZ'] => '青年五四奖组织',
        IResourceCatalog::TYPE['XBXZXK'] => '市场禁入企业',
        IResourceCatalog::TYPE['XZZLJ'] => '县长质量奖',
        IResourceCatalog::TYPE['QGYXJS'] => '全国优秀教师',
        IResourceCatalog::TYPE['QGYXSXDY'] => '全国优秀少先队员',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
