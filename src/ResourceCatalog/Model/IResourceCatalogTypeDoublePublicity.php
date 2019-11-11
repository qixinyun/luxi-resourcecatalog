<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeDoublePublicity
{
    const TYPE_DOUBLE_PUBLICITY = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['SANCTION'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['LICENSE'],
        IResourceCatalog::TYPE['SXBZXRZRR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SXBZXRJG'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['AJNSR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TQNMGGZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TQSB'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QNWSJGR'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QNWSJZZ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['SCJRQY'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['XZZLJ'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QGYXJS'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['QGYXSXDY'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::DOUBLE_PUBLICITY['NULL']
    );
}
