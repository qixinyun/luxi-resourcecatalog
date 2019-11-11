<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SXBZXRZRR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['SXBZXRJG'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['AJNSR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['TQNMGGZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['TQSB'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['QNWSJGR'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['QNWSJZZ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['SCJRQY'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['XZZLJ'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['QGYXJS'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['QGYXSXDY'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}
