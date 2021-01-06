<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SlotTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->resource->name,
            'values' => $this->when(count($this->resource->values ?? []) > 0, SlotTypeValueResource::collection($this->resource->values)),
            'valueSupplier' => $this->when($this->resource->valueSupplier, new CatalogValueSupplierResource($this->resource->valueSupplier)),
        ];
    }
}
