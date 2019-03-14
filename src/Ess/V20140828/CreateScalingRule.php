<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api CreateScalingRule
 *
 * @method string getResourceOwnerAccount()
 * @method string getAdjustmentValue()
 * @method array getStepAdjustment()
 * @method string getScalingGroupId()
 * @method string getEstimatedInstanceWarmup()
 * @method string getOwnerAccount()
 * @method string getPredictiveTaskBufferTime()
 * @method string getAdjustmentType()
 * @method string getDisableScaleIn()
 * @method string getOwnerId()
 * @method string getInitialMaxSize()
 * @method string getPredictiveValueBuffer()
 * @method string getScalingRuleName()
 * @method string getCooldown()
 * @method string getMinAdjustmentMagnitude()
 * @method string getPredictiveValueBehavior()
 * @method string getTargetValue()
 * @method string getScalingRuleType()
 * @method string getMetricName()
 * @method string getPredictiveScalingMode()
 */
class CreateScalingRule extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $adjustmentValue
     *
     * @return $this
     */
    public function withAdjustmentValue($adjustmentValue)
    {
        $this->data['AdjustmentValue'] = $adjustmentValue;
        $this->options['query']['AdjustmentValue'] = $adjustmentValue;

        return $this;
    }

    /**
     * @param array $stepAdjustment
     *
     * @return $this
     */
    public function withStepAdjustment(array $stepAdjustment)
    {
        $this->data['StepAdjustment'] = $stepAdjustment;
        foreach ($stepAdjustment as $i => $iValue) {
            $this->options['query']['StepAdjustment.' . ($i + 1) . '.MetricIntervalLowerBound'] = $stepAdjustment[$i]['MetricIntervalLowerBound'];
            $this->options['query']['StepAdjustment.' . ($i + 1) . '.MetricIntervalUpperBound'] = $stepAdjustment[$i]['MetricIntervalUpperBound'];
            $this->options['query']['StepAdjustment.' . ($i + 1) . '.ScalingAdjustment'] = $stepAdjustment[$i]['ScalingAdjustment'];
        }

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $estimatedInstanceWarmup
     *
     * @return $this
     */
    public function withEstimatedInstanceWarmup($estimatedInstanceWarmup)
    {
        $this->data['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;
        $this->options['query']['EstimatedInstanceWarmup'] = $estimatedInstanceWarmup;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $predictiveTaskBufferTime
     *
     * @return $this
     */
    public function withPredictiveTaskBufferTime($predictiveTaskBufferTime)
    {
        $this->data['PredictiveTaskBufferTime'] = $predictiveTaskBufferTime;
        $this->options['query']['PredictiveTaskBufferTime'] = $predictiveTaskBufferTime;

        return $this;
    }

    /**
     * @param string $adjustmentType
     *
     * @return $this
     */
    public function withAdjustmentType($adjustmentType)
    {
        $this->data['AdjustmentType'] = $adjustmentType;
        $this->options['query']['AdjustmentType'] = $adjustmentType;

        return $this;
    }

    /**
     * @param string $disableScaleIn
     *
     * @return $this
     */
    public function withDisableScaleIn($disableScaleIn)
    {
        $this->data['DisableScaleIn'] = $disableScaleIn;
        $this->options['query']['DisableScaleIn'] = $disableScaleIn;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $initialMaxSize
     *
     * @return $this
     */
    public function withInitialMaxSize($initialMaxSize)
    {
        $this->data['InitialMaxSize'] = $initialMaxSize;
        $this->options['query']['InitialMaxSize'] = $initialMaxSize;

        return $this;
    }

    /**
     * @param string $predictiveValueBuffer
     *
     * @return $this
     */
    public function withPredictiveValueBuffer($predictiveValueBuffer)
    {
        $this->data['PredictiveValueBuffer'] = $predictiveValueBuffer;
        $this->options['query']['PredictiveValueBuffer'] = $predictiveValueBuffer;

        return $this;
    }

    /**
     * @param string $scalingRuleName
     *
     * @return $this
     */
    public function withScalingRuleName($scalingRuleName)
    {
        $this->data['ScalingRuleName'] = $scalingRuleName;
        $this->options['query']['ScalingRuleName'] = $scalingRuleName;

        return $this;
    }

    /**
     * @param string $cooldown
     *
     * @return $this
     */
    public function withCooldown($cooldown)
    {
        $this->data['Cooldown'] = $cooldown;
        $this->options['query']['Cooldown'] = $cooldown;

        return $this;
    }

    /**
     * @param string $minAdjustmentMagnitude
     *
     * @return $this
     */
    public function withMinAdjustmentMagnitude($minAdjustmentMagnitude)
    {
        $this->data['MinAdjustmentMagnitude'] = $minAdjustmentMagnitude;
        $this->options['query']['MinAdjustmentMagnitude'] = $minAdjustmentMagnitude;

        return $this;
    }

    /**
     * @param string $predictiveValueBehavior
     *
     * @return $this
     */
    public function withPredictiveValueBehavior($predictiveValueBehavior)
    {
        $this->data['PredictiveValueBehavior'] = $predictiveValueBehavior;
        $this->options['query']['PredictiveValueBehavior'] = $predictiveValueBehavior;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function withTargetValue($targetValue)
    {
        $this->data['TargetValue'] = $targetValue;
        $this->options['query']['TargetValue'] = $targetValue;

        return $this;
    }

    /**
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function withScalingRuleType($scalingRuleType)
    {
        $this->data['ScalingRuleType'] = $scalingRuleType;
        $this->options['query']['ScalingRuleType'] = $scalingRuleType;

        return $this;
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function withMetricName($metricName)
    {
        $this->data['MetricName'] = $metricName;
        $this->options['query']['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $predictiveScalingMode
     *
     * @return $this
     */
    public function withPredictiveScalingMode($predictiveScalingMode)
    {
        $this->data['PredictiveScalingMode'] = $predictiveScalingMode;
        $this->options['query']['PredictiveScalingMode'] = $predictiveScalingMode;

        return $this;
    }
}
