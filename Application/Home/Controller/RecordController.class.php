<?php namespace Home\Controller;

use Think\Controller;

class RecordController extends Controller {

    /**
     * List records
     * 
     * @param 
     * @return 
     */
    public function index()
    {

        $Patient = D('Patient');
        $this->assign('name', '病人列表');
        $this->assign('title', 'patients list');
        $this->assign('patients', $Patient->select());
        $this->display();
    }
    
    /**
     * Create a record
     *
     * @param array input ($id)
     * @return 
     */
    public function create($id) 
    {
        $this->assign('name', '新建一个病历');
        $this->assign('title', 'create a record');
        $this->assign('patient_id', $id);
        $this->assign('record', (array) M('Record'));
        $this->display();
    }

    /**
     * Store a record
     *
     * @param array input ($id)
     * @return
     */
    public function store($id) 
    {

        $Record = D('Record');
        $Record->create();
        $Record->patient_id = $id;
        
        if($Record->add()) {
            $this->success('新增成功', U('/Home/Patient/edit/' . $id));
        } else {
            $this->error('新增失败');
        }
    }

    /**
     * Edit a record
     * 
     * @param  integer record_id
     * @return
     */
    public function edit($id)
    {
        $this->assign('name', '编辑病历资料');
        $this->assign('title', 'edit a record');
        $this->assign('record', D('Record')->find($id));
        $this->display();
    }

    /**
     * Update a record
     * 
     * @param integer $id
     * @return 
     */ 
    public function update($id)
    {
        $Record                  = M('Record');
        $Record->find($id);
        $Record->patient_id      = I('post.patient_id', '');
        $Record->complained      = I('post.complained', '');
        $Record->diagnosis       = I('post.diagnosis', '');
        $Record->result          = I('post.result', '');
        $Record->ended_at        = I('post.ended_at', '');

        if ($Record->save()) {
           $this->success('编辑成功', U('/Home/Patient/edit/' . I('post.patient_id', '')));
        } else {
            $this->error('编辑失败');
        }
    }

    /** 
     * Delete a patient
     *
     * @param integer patient_id
     * @return 
     */
    public function delete($id)
    {
        $Record     = D('Record');
        $patient_id = $Record->find($id)['patient_id'];

        if ($Record->delete($id)) {
           $this->success('删除成功', U('/Home/Patient/edit/' . $patient_id));
        } else {
            $this->error('删除失败');
        }
    }
}
