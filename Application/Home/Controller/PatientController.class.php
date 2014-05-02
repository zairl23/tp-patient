<?php namespace Home\Controller;

use Think\Controller;

class PatientController extends Controller {

    /**
     * List patients
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
     * Create a patient
     *
     * @param array input ()
     * @return 
     */
    public function create() 
    {
        $this->assign('name', '新建一个病人');
        $this->assign('title', 'create a patient');
        $this->assign('patient', (array) M('Patient'));
    	$this->display();
    }

    /**
     * Store a patient
     *
     * @param array input
     * @return
     */
    public function store() 
    {

    	$Patient = D('Patient');
        $Patient->create();
        if($Patient->add()) {
            //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Patient/index'));
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
        }
    }

    /**
     * Edit a patient
     * 
     * @param  integer patient_id
     * @return
     */
    public function edit($id)
    {
    	$this->assign('name', '编辑病人资料');
        $this->assign('title', 'edit a patient');
        $this->assign('patient', D('Patient')->relation(true)->find($id));
        //var_dump(D('Patient')->relation(true)->find($id));
        //$this->assign('records', D('Record')->where('patient_id'));
        $this->display();
    }

    /**
     * Update a patient
     * 
     * @param integer patient_id
     * @return 
     */ 
    public function update($id)
    {
        $Patient                 = M('Patient');
        $Patient->find($id);
        $Patient->name           = I('post.name', '');
        $Patient->sex            = I('post.sex', '');
        $Patient->age            = I('post.age', '');
        $Patient->profession     = I('post.profession', '');
        $Patient->birth_place    = I('post.birth_place', '');
        $Patient->martial_status = I('post.martial_status', '');
        $Patient->phonenumber    = I('post.phonenumber', '');

        if ($Patient->save()) {
           $this->success('编辑成功', U('/Home/Patient/edit/' . $id));
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
    	$Patient                 = D('Patient');
        if ($Patient->relation(true)->delete($id)) {
           $this->success('删除成功', U('Patient/index'));
        } else {
            $this->error('删除失败');
        }
    }
}