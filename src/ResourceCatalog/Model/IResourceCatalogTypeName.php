<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => '',
        IResourceCatalog::TYPE['XBXZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['SXBZXRZRR'] => '失信被执行人(自然人)',
        IResourceCatalog::TYPE['SXBZXRJG'] => '失信被执行人（机构）',
        IResourceCatalog::TYPE['AJNSR'] => 'A级纳税人',
        IResourceCatalog::TYPE['TQNMGGZ'] => '拖欠农民工工资',
        IResourceCatalog::TYPE['TQSB'] => '拖欠社保',
        IResourceCatalog::TYPE['QNWSJGR'] => '青年五四奖个人',
        IResourceCatalog::TYPE['QNWSJZZ'] => '青年五四奖组织',
        IResourceCatalog::TYPE['SCJRQY'] => '市场禁入企业',
        IResourceCatalog::TYPE['XZZLJ'] => '县长质量奖',
        IResourceCatalog::TYPE['QGYXJS'] => '全国优秀教师',
        IResourceCatalog::TYPE['QGYXSXDY'] => '全国优秀少先队员',

        IResourceCatalog::TYPE['RYBZXX'] => '荣誉表彰信息',
        IResourceCatalog::TYPE['RYJLXX'] => '荣誉奖励信息',
        IResourceCatalog::TYPE['DFXYF'] => '地方信用分',
        IResourceCatalog::TYPE['DFXBMDXXFR'] => '地方性黑名单信息（法人）',
        IResourceCatalog::TYPE['DFXRMDXXFR'] => '地方性红名单信息（法人）',
        IResourceCatalog::TYPE['DFXBMDXXZRR'] => '地方性黑名单信息（自然人）',
        IResourceCatalog::TYPE['DFXRMDXXZRR'] => '地方性红名单信息（自然人）',
        IResourceCatalog::TYPE['QIYEJBXXNEW'] => '企业基本信息',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
        IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
        IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '严重拖欠农民工工资黑名单',
        IResourceCatalog::TYPE['SLGCZBXX'] => '水利工程中标信息',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => '医师执业注册和变更注册',
        IResourceCatalog::TYPE['YSZYZGZXX'] => '医师执业资格证信息',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => '卫生和计划生育委员会基础信息',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => '医疗和计生服务机构信息',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => '疾病预防控制机构信息',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => '卫生专业技术资格考试违纪信息',
        IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => '危险化学品企业编号管理清单',
        IResourceCatalog::TYPE['JXSZLJDW'] => '江西省专利奖（单位）',
        IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => '音像制作单位及变更信息',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['QSXXFR'] => '欠税信息（法人）',
        IResourceCatalog::TYPE['NSXXFR'] => '纳税信息（法人）',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['ZDSSWFAJXX'] => '重大税收违法案件信息',
        IResourceCatalog::TYPE['DBHXX'] => '低保户信息',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['ZYZXX'] => '志愿者信息',
        IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
        IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
        IResourceCatalog::TYPE['LSTDFWBA'] => '绿色通道服务备案',
        IResourceCatalog::TYPE['QYYH'] => '企业用户',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['FRGYSYJFXX'] => '法人公用事业缴费信息',
        IResourceCatalog::TYPE['FRTQGYSYFXX'] => '法人拖欠公用事业费信息',
        IResourceCatalog::TYPE['ZRRGYSYJFXX'] => '自然人公用事业缴费信息',
        IResourceCatalog::TYPE['ZRRTQGYSYFXX'] => '自然人拖欠公用事业费信息',

        IResourceCatalog::TYPE['NSXXZRR'] => '纳税信息（自然人）',
        IResourceCatalog::TYPE['QSXXZRR'] => '欠税信息（自然人）',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['SHJZSXRYMD'] => '社会救助失信人员名单',

        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
