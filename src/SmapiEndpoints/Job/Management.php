<?php

namespace Nanuc\Smapi\SmapiEndpoints\Job;

use Nanuc\Smapi\Models\Catalog;

class Management extends Job
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/manage-update-jobs.html#create-a-job-definition
     */
    public function createCatalogAutoRefreshJobDefinition($vendorId, Catalog $catalog, $hour, $dayOfWeek = null)
    {
        $this->useCatalogId = false;

        return $this->post('', [
            'vendorId' => $vendorId,
            'jobDefinition' => [
                'type' => 'CatalogAutoRefresh',
                'resource' => [
                    'type' => 'Catalog',
                    'id' => $catalog->getCatalogId()
                ],
                'trigger' => [
                    'type' => 'Scheduled',
                    'hour' => $hour,
                    'dayOfWeek' => $dayOfWeek
                ],
                'status' => 'ENABLED'
            ]
        ]);
    }

    public function createReferencedResourceVersionUpdateJobDefinition($vendorId, $references, $skillId, $locales, $publishToLive = true)
    {
        $this->useCatalogId = false;

        return $this->post('', [
            'vendorId' => $vendorId,
            'jobDefinition' => [
                'type' => 'ReferenceVersionUpdate',
                'resource' => [
                    'type' => 'InteractionModel',
                    'locales' => $locales,
                    'id' => $skillId
                ],
                'references' => $references,
                'trigger' => [
                    'type' => 'ReferencedResourceJobsComplete',
                ],
                'publishToLive' => $publishToLive,
                'status' => 'ENABLED'
            ]
        ]);
    }


    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/manage-update-jobs.html#list-jobs-for-vendor-id
     */
    public function listJobs($vendorId)
    {
        $this->useJobId = false;
        return $this->get('?vendorId=' . $vendorId);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/manage-update-jobs.html#read-job-definition
     */
    public function readJobDefinition()
    {
        return $this->get('');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/manage-update-jobs.html#list-execution-history
     */
    public function listExecutionHistory()
    {
        return $this->get('executions');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/manage-update-jobs.html#delete-job
     */
    public function deleteJob()
    {
        $this->delete();
    }
}
