<?php

namespace Modules\Student\Entities;

use App\BaseModel;

class ReRegisterCourse extends BaseModel
{
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

    public function session()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Session');
    }

    public function course()
    {
    	return $this->belongsTo('Modules\Coodinator\Entities\Course');
    }
}
