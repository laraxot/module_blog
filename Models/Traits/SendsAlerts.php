<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

trait SendsAlerts
{
    protected function success(string $id = null, $parameters = [])
    {
        $this->sendAlert('success', $id, $parameters);
    }

    protected function error(string $id = null, $parameters = [])
    {
        $this->sendAlert('error', $id, $parameters);
    }

    private function sendAlert(string $type, string $id = null, $parameters = [])
    {
        session([$type => trans($id, (array) $parameters)]);
    }
}
