<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddSkillReturn;
use Voximplant\Interfaces\BindSkillReturn;
use Voximplant\Interfaces\DelSkillReturn;
use Voximplant\Interfaces\GetSkillsReturn;
use Voximplant\Interfaces\SetSkillInfoReturn;
use Voximplant\Interfaces\SkillsInterface;

class Skills implements SkillsInterface
{
    protected $client;

    /** @object AddSkill */
    protected $AddSkillReturn;

    /** @object DelSkill */
    protected $DelSkillReturn;

    /** @object SetSkillInfo */
    protected $SetSkillInfoReturn;

    /** @object GetSkills */
    protected $GetSkillsReturn;

    /** @object BindSkill */
    protected $BindSkillReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddSkillReturn = new AddSkillReturn();
        $this->DelSkillReturn = new DelSkillReturn();
        $this->SetSkillInfoReturn = new SetSkillInfoReturn();
        $this->GetSkillsReturn = new GetSkillsReturn();
        $this->BindSkillReturn = new BindSkillReturn();
    }

    /**
     * @method Adds a new operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use this reference.
     */
    public function AddSkill(Params\AddSkillParams $params = null): AddSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddSkillReturn->$key = $value;
        }
        return $this->AddSkillReturn;
    }

    /**
     * @method Deletes an operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use this reference.
     */
    public function DelSkill(Params\DelSkillParams $params = null): DelSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelSkillReturn->$key = $value;
        }
        return $this->DelSkillReturn;
    }

    /**
     * @method Edits an operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use this reference.
     */
    public function SetSkillInfo(Params\SetSkillInfoParams $params = null): SetSkillInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetSkillInfoReturn->$key = $value;
        }
        return $this->SetSkillInfoReturn;
    }

    /**
     * @method Gets the skills of an operator. Works only for ACDv1. For SmartQueue/ACDv2, use this reference.
     */
    public function GetSkills(Params\GetSkillsParams $params = null): GetSkillsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSkillsReturn->$key = $value;
        }
        return $this->GetSkillsReturn;
    }

    /**
     * @method Binds the specified skills to the users (ACD operators) and/or the ACD queues. Works only for ACDv1. For SmartQueue/ACDv2, use this reference.
     */
    public function BindSkill(Params\BindSkillParams $params = null): BindSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->BindSkillReturn->$key = $value;
        }
        return $this->BindSkillReturn;
    }
}
