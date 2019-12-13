<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\Schemas\InteractionModel;

class InteractionModelOperations extends Skill
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/interaction-model-operations.html#get-interaction-model
     */
    public function getInteractionModel($locale)
    {
        return InteractionModel::fromJSON($this->get('interactionModel/locales/' . $locale)->interactionModel);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/interaction-model-operations.html#head-interaction-model
     */
    public function headInteractionModel()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/interaction-model-operations.html#update-interaction-model
     */
    public function updateInteractionModel()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/interaction-model-operations.html#list-interaction-model-versions
     */
    public function listInteractionModelVersions()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/interaction-model-operations.html#get-interaction-model-version
     */
    public function getInteractionModelVersion()
    {
        //
    }
}
