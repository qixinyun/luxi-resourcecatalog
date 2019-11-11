<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['QNWSJGR'] => 'QNWSJGR',
        IResourceCatalog::TYPE['QNWSJZZ'] => 'QNWSJZZ',
        IResourceCatalog::TYPE['SCJRQY'] => 'SCJRQY',
        IResourceCatalog::TYPE['XZZLJ'] => 'XZZLJ',
        IResourceCatalog::TYPE['QGYXJS'] => 'QGYXJS',
        IResourceCatalog::TYPE['QGYXSXDY'] => 'QGYXSXDY',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
