<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCustomLine addCustomLine(array $options = [])
 * @method AddDomain addDomain(array $options = [])
 * @method AddDomainBackup addDomainBackup(array $options = [])
 * @method AddDomainGroup addDomainGroup(array $options = [])
 * @method AddDomainRecord addDomainRecord(array $options = [])
 * @method AddGtmAccessStrategy addGtmAccessStrategy(array $options = [])
 * @method AddGtmAddressPool addGtmAddressPool(array $options = [])
 * @method AddGtmMonitor addGtmMonitor(array $options = [])
 * @method AddGtmRecoveryPlan addGtmRecoveryPlan(array $options = [])
 * @method BindInstanceDomains bindInstanceDomains(array $options = [])
 * @method ChangeDomainGroup changeDomainGroup(array $options = [])
 * @method ChangeDomainOfDnsProduct changeDomainOfDnsProduct(array $options = [])
 * @method DeleteCustomLines deleteCustomLines(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method DeleteDomainRecord deleteDomainRecord(array $options = [])
 * @method DeleteGtmAccessStrategy deleteGtmAccessStrategy(array $options = [])
 * @method DeleteGtmAddressPool deleteGtmAddressPool(array $options = [])
 * @method DeleteGtmRecoveryPlan deleteGtmRecoveryPlan(array $options = [])
 * @method DeleteSubDomainRecords deleteSubDomainRecords(array $options = [])
 * @method DescribeBatchResultCount describeBatchResultCount(array $options = [])
 * @method DescribeBatchResultDetail describeBatchResultDetail(array $options = [])
 * @method DescribeCustomLine describeCustomLine(array $options = [])
 * @method DescribeCustomLines describeCustomLines(array $options = [])
 * @method DescribeDnsProductInstance describeDnsProductInstance(array $options = [])
 * @method DescribeDnsProductInstances describeDnsProductInstances(array $options = [])
 * @method DescribeDNSSLBSubDomains describeDNSSLBSubDomains(array $options = [])
 * @method DescribeDomainGroups describeDomainGroups(array $options = [])
 * @method DescribeDomainInfo describeDomainInfo(array $options = [])
 * @method DescribeDomainLogs describeDomainLogs(array $options = [])
 * @method DescribeDomainNs describeDomainNs(array $options = [])
 * @method DescribeDomainRecordInfo describeDomainRecordInfo(array $options = [])
 * @method DescribeDomainRecords describeDomainRecords(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 * @method DescribeDomainStatistics describeDomainStatistics(array $options = [])
 * @method DescribeDomainStatisticsSummary describeDomainStatisticsSummary(array $options = [])
 * @method DescribeGtmAccessStrategies describeGtmAccessStrategies(array $options = [])
 * @method DescribeGtmAccessStrategy describeGtmAccessStrategy(array $options = [])
 * @method DescribeGtmAccessStrategyAvailableConfig describeGtmAccessStrategyAvailableConfig(array $options = [])
 * @method DescribeGtmAvailableAlertGroup describeGtmAvailableAlertGroup(array $options = [])
 * @method DescribeGtmInstance describeGtmInstance(array $options = [])
 * @method DescribeGtmInstanceAddressPool describeGtmInstanceAddressPool(array $options = [])
 * @method DescribeGtmInstanceAddressPools describeGtmInstanceAddressPools(array $options = [])
 * @method DescribeGtmInstances describeGtmInstances(array $options = [])
 * @method DescribeGtmInstanceStatus describeGtmInstanceStatus(array $options = [])
 * @method DescribeGtmInstanceSystemCname describeGtmInstanceSystemCname(array $options = [])
 * @method DescribeGtmLogs describeGtmLogs(array $options = [])
 * @method DescribeGtmMonitorAvailableConfig describeGtmMonitorAvailableConfig(array $options = [])
 * @method DescribeGtmMonitorConfig describeGtmMonitorConfig(array $options = [])
 * @method DescribeGtmRecoveryPlan describeGtmRecoveryPlan(array $options = [])
 * @method DescribeGtmRecoveryPlanAvailableConfig describeGtmRecoveryPlanAvailableConfig(array $options = [])
 * @method DescribeGtmRecoveryPlans describeGtmRecoveryPlans(array $options = [])
 * @method DescribeRecordLogs describeRecordLogs(array $options = [])
 * @method DescribeRecordStatistics describeRecordStatistics(array $options = [])
 * @method DescribeRecordStatisticsSummary describeRecordStatisticsSummary(array $options = [])
 * @method DescribeSubDomainRecords describeSubDomainRecords(array $options = [])
 * @method DescribeSupportLines describeSupportLines(array $options = [])
 * @method DescribeTransferDomains describeTransferDomains(array $options = [])
 * @method ExecuteGtmRecoveryPlan executeGtmRecoveryPlan(array $options = [])
 * @method GetMainDomainName getMainDomainName(array $options = [])
 * @method GetTxtRecordForVerify getTxtRecordForVerify(array $options = [])
 * @method ModifyHichinaDomainDNS modifyHichinaDomainDNS(array $options = [])
 * @method OperateBatchDomain operateBatchDomain(array $options = [])
 * @method PreviewGtmRecoveryPlan previewGtmRecoveryPlan(array $options = [])
 * @method RetrieveDomain retrieveDomain(array $options = [])
 * @method RollbackGtmRecoveryPlan rollbackGtmRecoveryPlan(array $options = [])
 * @method SetDNSSLBStatus setDNSSLBStatus(array $options = [])
 * @method SetDomainRecordStatus setDomainRecordStatus(array $options = [])
 * @method SetGtmAccessMode setGtmAccessMode(array $options = [])
 * @method SetGtmMonitorStatus setGtmMonitorStatus(array $options = [])
 * @method TransferDomain transferDomain(array $options = [])
 * @method UnbindInstanceDomains unbindInstanceDomains(array $options = [])
 * @method UpdateCustomLine updateCustomLine(array $options = [])
 * @method UpdateDNSSLBWeight updateDNSSLBWeight(array $options = [])
 * @method UpdateDomainGroup updateDomainGroup(array $options = [])
 * @method UpdateDomainRecord updateDomainRecord(array $options = [])
 * @method UpdateDomainRecordRemark updateDomainRecordRemark(array $options = [])
 * @method UpdateDomainRemark updateDomainRemark(array $options = [])
 * @method UpdateGtmAccessStrategy updateGtmAccessStrategy(array $options = [])
 * @method UpdateGtmAddressPool updateGtmAddressPool(array $options = [])
 * @method UpdateGtmInstanceGlobalConfig updateGtmInstanceGlobalConfig(array $options = [])
 * @method UpdateGtmMonitor updateGtmMonitor(array $options = [])
 * @method UpdateGtmRecoveryPlan updateGtmRecoveryPlan(array $options = [])
 */
class AlidnsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Alidns';

    /** @var string */
    public $version = '2015-01-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alidns';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method array getIpSegment()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLineName()
 * @method $this withLineName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddCustomLine extends Rpc
{

    /**
     * @param array $ipSegment
     *
     * @return $this
     */
	public function withIpSegment(array $ipSegment)
	{
	    $this->data['IpSegment'] = $ipSegment;
		foreach ($ipSegment as $depth1 => $depth1Value) {
			$this->options['query']['IpSegment.' . ($depth1 + 1) . '.EndIp'] = $depth1Value['EndIp'];
			$this->options['query']['IpSegment.' . ($depth1 + 1) . '.StartIp'] = $depth1Value['StartIp'];
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPeriodType()
 * @method $this withPeriodType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddDomainBackup extends Rpc
{
}

/**
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddDomainGroup extends Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class AddDomainRecord extends Rpc
{
}

/**
 * @method string getDefaultAddrPoolId()
 * @method $this withDefaultAddrPoolId($value)
 * @method string getFailoverAddrPoolId()
 * @method $this withFailoverAddrPoolId($value)
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getAccessLines()
 * @method $this withAccessLines($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddGtmAccessStrategy extends Rpc
{
}

/**
 * @method string getMonitorExtendInfo()
 * @method $this withMonitorExtendInfo($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getMinAvailableAddrNum()
 * @method $this withMinAvailableAddrNum($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getAddr()
 * @method string getMonitorStatus()
 * @method $this withMonitorStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method array getIspCityNode()
 */
class AddGtmAddressPool extends Rpc
{

    /**
     * @param array $addr
     *
     * @return $this
     */
	public function withAddr(array $addr)
	{
	    $this->data['Addr'] = $addr;
		foreach ($addr as $depth1 => $depth1Value) {
			$this->options['query']['Addr.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
			$this->options['query']['Addr.' . ($depth1 + 1) . '.LbaWeight'] = $depth1Value['LbaWeight'];
			$this->options['query']['Addr.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
	public function withIspCityNode(array $ispCityNode)
	{
	    $this->data['IspCityNode'] = $ispCityNode;
		foreach ($ispCityNode as $depth1 => $depth1Value) {
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
		}

		return $this;
    }
}

/**
 * @method string getMonitorExtendInfo()
 * @method $this withMonitorExtendInfo($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getIspCityNode()
 */
class AddGtmMonitor extends Rpc
{

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
	public function withIspCityNode(array $ispCityNode)
	{
	    $this->data['IspCityNode'] = $ispCityNode;
		foreach ($ispCityNode as $depth1 => $depth1Value) {
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
		}

		return $this;
    }
}

/**
 * @method string getFaultAddrPool()
 * @method $this withFaultAddrPool($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class BindInstanceDomains extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ChangeDomainGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNewDomain()
 * @method $this withNewDomain($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ChangeDomainOfDnsProduct extends Rpc
{
}

/**
 * @method string getLineIds()
 * @method $this withLineIds($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteCustomLines extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomainGroup extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomainRecord extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmAccessStrategy extends Rpc
{
}

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmAddressPool extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteSubDomainRecords extends Rpc
{
}

/**
 * @method string getBatchType()
 * @method $this withBatchType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeBatchResultCount extends Rpc
{
}

/**
 * @method string getBatchType()
 * @method $this withBatchType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeBatchResultDetail extends Rpc
{
}

/**
 * @method string getLineId()
 * @method $this withLineId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCustomLine extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCustomLines extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDnsProductInstance extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVersionCode()
 * @method $this withVersionCode($value)
 */
class DescribeDnsProductInstances extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDNSSLBSubDomains extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class DescribeDomainGroups extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNeedDetailAttributes()
 * @method $this withNeedDetailAttributes($value)
 */
class DescribeDomainInfo extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndDate()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class DescribeDomainLogs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['query']['endDate'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainNs extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainRecordInfo extends Rpc
{
}

/**
 * @method string getValueKeyWord()
 * @method $this withValueKeyWord($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getRRKeyWord()
 * @method $this withRRKeyWord($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getTypeKeyWord()
 * @method $this withTypeKeyWord($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeDomainRecords extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getStarmark()
 * @method $this withStarmark($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 */
class DescribeDomains extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeDomainStatistics extends Rpc
{
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 */
class DescribeDomainStatisticsSummary extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAccessStrategies extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAccessStrategy extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAccessStrategyAvailableConfig extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmAvailableAlertGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getNeedDetailAttributes()
 * @method $this withNeedDetailAttributes($value)
 */
class DescribeGtmInstance extends Rpc
{
}

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceAddressPool extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceAddressPools extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getNeedDetailAttributes()
 * @method $this withNeedDetailAttributes($value)
 */
class DescribeGtmInstances extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceSystemCname extends Rpc
{
}

/**
 * @method string getStartTimestamp()
 * @method $this withStartTimestamp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndTimestamp()
 * @method $this withEndTimestamp($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeGtmLogs extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmMonitorAvailableConfig extends Rpc
{
}

/**
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmMonitorConfig extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmRecoveryPlanAvailableConfig extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeGtmRecoveryPlans extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getEndDate()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 */
class DescribeRecordLogs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['query']['endDate'] = $value;

        return $this;
    }
}

/**
 * @method string getRr()
 * @method $this withRr($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeRecordStatistics extends Rpc
{
}

/**
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 */
class DescribeRecordStatisticsSummary extends Rpc
{
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSubDomainRecords extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeSupportLines extends Rpc
{
}

/**
 * @method string getFromUserId()
 * @method $this withFromUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTargetUserId()
 * @method $this withTargetUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTransferType()
 * @method $this withTransferType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class DescribeTransferDomains extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ExecuteGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getInputString()
 * @method $this withInputString($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetMainDomainName extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetTxtRecordForVerify extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ModifyHichinaDomainDNS extends Rpc
{
}

/**
 * @method array getDomainRecordInfo()
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class OperateBatchDomain extends Rpc
{

    /**
     * @param array $domainRecordInfo
     *
     * @return $this
     */
	public function withDomainRecordInfo(array $domainRecordInfo)
	{
	    $this->data['DomainRecordInfo'] = $domainRecordInfo;
		foreach ($domainRecordInfo as $depth1 => $depth1Value) {
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Rr'] = $depth1Value['Rr'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewType'] = $depth1Value['NewType'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewValue'] = $depth1Value['NewValue'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Line'] = $depth1Value['Line'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Domain'] = $depth1Value['Domain'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Priority'] = $depth1Value['Priority'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.Ttl'] = $depth1Value['Ttl'];
			$this->options['query']['DomainRecordInfo.' . ($depth1 + 1) . '.NewRr'] = $depth1Value['NewRr'];
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class PreviewGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class RetrieveDomain extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class RollbackGtmRecoveryPlan extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSubDomain()
 * @method $this withSubDomain($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getOpen()
 * @method $this withOpen($value)
 */
class SetDNSSLBStatus extends Rpc
{
}

/**
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetDomainRecordStatus extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAccessMode()
 * @method $this withAccessMode($value)
 */
class SetGtmAccessMode extends Rpc
{
}

/**
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SetGtmMonitorStatus extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTargetUserId()
 * @method $this withTargetUserId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferDomain extends Rpc
{
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UnbindInstanceDomains extends Rpc
{
}

/**
 * @method string getLineId()
 * @method $this withLineId($value)
 * @method array getIpSegment()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLineName()
 * @method $this withLineName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateCustomLine extends Rpc
{

    /**
     * @param array $ipSegment
     *
     * @return $this
     */
	public function withIpSegment(array $ipSegment)
	{
	    $this->data['IpSegment'] = $ipSegment;
		foreach ($ipSegment as $depth1 => $depth1Value) {
			$this->options['query']['IpSegment.' . ($depth1 + 1) . '.EndIp'] = $depth1Value['EndIp'];
			$this->options['query']['IpSegment.' . ($depth1 + 1) . '.StartIp'] = $depth1Value['StartIp'];
		}

		return $this;
    }
}

/**
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDNSSLBWeight extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDomainGroup extends Rpc
{
}

/**
 * @method string getRR()
 * @method $this withRR($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getTTL()
 * @method $this withTTL($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class UpdateDomainRecord extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDomainRecordRemark extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDomainRemark extends Rpc
{
}

/**
 * @method string getDefaultAddrPoolId()
 * @method $this withDefaultAddrPoolId($value)
 * @method string getFailoverAddrPoolId()
 * @method $this withFailoverAddrPoolId($value)
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getAccessLines()
 * @method $this withAccessLines($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateGtmAccessStrategy extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getMinAvailableAddrNum()
 * @method $this withMinAvailableAddrNum($value)
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getAddr()
 */
class UpdateGtmAddressPool extends Rpc
{

    /**
     * @param array $addr
     *
     * @return $this
     */
	public function withAddr(array $addr)
	{
	    $this->data['Addr'] = $addr;
		foreach ($addr as $depth1 => $depth1Value) {
			$this->options['query']['Addr.' . ($depth1 + 1) . '.Mode'] = $depth1Value['Mode'];
			$this->options['query']['Addr.' . ($depth1 + 1) . '.LbaWeight'] = $depth1Value['LbaWeight'];
			$this->options['query']['Addr.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }
}

/**
 * @method string getAlertGroup()
 * @method $this withAlertGroup($value)
 * @method string getCnameMode()
 * @method $this withCnameMode($value)
 * @method string getLbaStrategy()
 * @method $this withLbaStrategy($value)
 * @method string getTtl()
 * @method $this withTtl($value)
 * @method string getCnameCustomDomainName()
 * @method $this withCnameCustomDomainName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getUserDomainName()
 * @method $this withUserDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateGtmInstanceGlobalConfig extends Rpc
{
}

/**
 * @method string getMonitorExtendInfo()
 * @method $this withMonitorExtendInfo($value)
 * @method string getMonitorConfigId()
 * @method $this withMonitorConfigId($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getEvaluationCount()
 * @method $this withEvaluationCount($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method array getIspCityNode()
 */
class UpdateGtmMonitor extends Rpc
{

    /**
     * @param array $ispCityNode
     *
     * @return $this
     */
	public function withIspCityNode(array $ispCityNode)
	{
	    $this->data['IspCityNode'] = $ispCityNode;
		foreach ($ispCityNode as $depth1 => $depth1Value) {
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.CityCode'] = $depth1Value['CityCode'];
			$this->options['query']['IspCityNode.' . ($depth1 + 1) . '.IspCode'] = $depth1Value['IspCode'];
		}

		return $this;
    }
}

/**
 * @method string getFaultAddrPool()
 * @method $this withFaultAddrPool($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRecoveryPlanId()
 * @method $this withRecoveryPlanId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateGtmRecoveryPlan extends Rpc
{
}
