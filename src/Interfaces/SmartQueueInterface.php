<?php

namespace Voximplant\Interfaces;

interface SmartQueueInterface
{
    /**
     * @method Gets the metrics for the specified smart queue for the last 30 minutes.
     */
    public function GetSmartQueueRealtimeMetrics(\Voximplant\Resources\Params\GetSmartQueueRealtimeMetricsParams $params);

    /**
     * @method Gets the metrics for the specified smart queue for the last 2 days.
     */
    public function GetSmartQueueDayHistory(\Voximplant\Resources\Params\GetSmartQueueDayHistoryParams $params);

    /**
     * @method Gets history for the specified smart queue.
     */
    public function RequestSmartQueueHistory(\Voximplant\Resources\Params\RequestSmartQueueHistoryParams $params);

    /**
     * @method Gets the current state of the specified smart queue.
     */
    public function GetSQState(\Voximplant\Resources\Params\GetSQStateParams $params);

    /**
     * @method Adds a new queue.
     */
    public function SQ_AddQueue(\Voximplant\Resources\Params\SQ_AddQueueParams $params);

    /**
     * @method Edits an existing queue.
     */
    public function SQ_SetQueueInfo(\Voximplant\Resources\Params\SQ_SetQueueInfoParams $params);

    /**
     * @method Deletes a queue.
     */
    public function SQ_DelQueue(\Voximplant\Resources\Params\SQ_DelQueueParams $params);

    /**
     * @method Gets the queue(s).
     */
    public function SQ_GetQueues(\Voximplant\Resources\Params\SQ_GetQueuesParams $params);

    /**
     * @method Adds a new skill to the app.
     */
    public function SQ_AddSkill(\Voximplant\Resources\Params\SQ_AddSkillParams $params);

    /**
     * @method Deletes a skill and detaches it from agents.
     */
    public function SQ_DelSkill(\Voximplant\Resources\Params\SQ_DelSkillParams $params);

    /**
     * @method Edits an existing skill.
     */
    public function SQ_SetSkillInfo(\Voximplant\Resources\Params\SQ_SetSkillInfoParams $params);

    /**
     * @method Binds skills to agents.
     */
    public function SQ_BindSkill(\Voximplant\Resources\Params\SQ_BindSkillParams $params);

    /**
     * @method Unbinds skills from agents.
     */
    public function SQ_UnbindSkill(\Voximplant\Resources\Params\SQ_UnbindSkillParams $params);

    /**
     * @method Gets the skill(s).
     */
    public function SQ_GetSkills(\Voximplant\Resources\Params\SQ_GetSkillsParams $params);

    /**
     * @method Binds agents to a queue.
     */
    public function SQ_BindAgent(\Voximplant\Resources\Params\SQ_BindAgentParams $params);

    /**
     * @method Unbinds agents from queues.
     */
    public function SQ_UnbindAgent(\Voximplant\Resources\Params\SQ_UnbindAgentParams $params);

    /**
     * @method Gets agents.
     */
    public function SQ_GetAgents(\Voximplant\Resources\Params\SQ_GetAgentsParams $params);

    /**
     * @method Edits the agent settings.
     */
    public function SQ_SetAgentInfo(\Voximplant\Resources\Params\SQ_SetAgentInfoParams $params);
}

{
    /** @var [SmartQueueMetricsResult] */
    public $result;

    /** @var string The used timezone, e.g., 'Etc/GMT' */
    public $timezone;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var [SmartQueueMetricsResult] */
    public $result;

    /** @var string The used timezone, e.g., 'Etc/GMT' */
    public $timezone;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var number History report ID */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var [SmartQueueState] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number ID of the added queue */
    public $sq_queue_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var GetSQQueuesResult The found skill(s) */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var GetSQSkillsResult The found skill(s). */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var GetSQAgentsResult The found agent(s) */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}

{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}