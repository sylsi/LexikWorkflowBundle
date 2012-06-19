<?php

namespace FreeAgent\WorkflowBundle\Model;

interface ModelInterface
{
    /**
     * Returns a unique identifier.
     *
     * @return mixed
     */
    public function getIdentifier();

    public function getWorkflowName();
    public function setWorkflowName($workflowName);
    public function setWorkflowStepName($stepName);
    public function getWorkflowStepName();
    public function setWorkflowStepComment($stepComment);
    public function getWorkflowStepComment();
    public function setWorkflowStepAt($stepAt);
    public function getWorkflowStepAt();
}
