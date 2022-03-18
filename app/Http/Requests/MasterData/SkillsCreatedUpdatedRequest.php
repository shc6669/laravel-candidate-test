<?php

namespace Vanguard\Http\Requests\MasterData;

use Vanguard\Http\Requests\Request;

class SkillsCreatedUpdatedRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|unique:m_skills,name'
        ];
    }
}
