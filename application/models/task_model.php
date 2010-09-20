<?php 
class task_model extends Model {

    
    function task_model()
    {
        // Call the Model constructor
        parent::Model();
    }
    function status_class($status)
    {
        $class = "";
        switch($status)
        {
            case 0 : $class = "new";
            break;
            case 1 : $class = "process";
            break;
            case 2 : $class = "process";
            break;
            case 3 : $class = "process";
            break;
            case 4 : $class = "process";
            break;
            case 5 : $class = "process";
            break;
             case 6 : $class = "finish";
            break;
             case 7 : $class = "finish";
            break;
                
            default :
           
        }
        return $class;
    }
    function summary_new()
    {
        $data['tasks'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status = 0) and DATE(task_date) = DATE(NOW())")->result_array();
        $data['sub'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status = 0  and DATE(tasks.task_date) = DATE(NOW())")->result_array();
	 	$data['tasks2'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status = 0)")->result_array();
        $data['sub2'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status = 0")->result_array();
       
       
       return $this->load->view("admin_view/summary_new",$data,true);
        
    }
    function summary_process()
    {
    	$data =array();
    	$data['tasks'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status in  (1,2,3,4,5)) and DATE(task_date) = DATE(NOW())")->result_array();
        $data['sub'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status in  (1,2,3,4,5)  and DATE(tasks.task_date) = DATE(NOW())")->result_array();
	 	$data['tasks2'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status in (1,2,3,4,5))")->result_array();
        $data['sub2'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status in (1,2,3,4,5)")->result_array();
    	 return $this->load->view("admin_view/summary_process",$data,true);
    }
    function summary_finish()
    {
    	$data =array();
    	$data =array();
    	$data['tasks'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status in  (6,7)) and DATE(task_date) = DATE(NOW())")->result_array();
        $data['sub'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status in  (6,7)  and DATE(tasks.task_date) = DATE(NOW())")->result_array();
	 	$data['tasks2'] = $this->db->query("select COUNT(*) as total from tasks where task_id in (select task_id from sub_tasks  where sub_status in (6,7))")->result_array();
        $data['sub2'] = $this->db->query("select count(*) as total from sub_tasks,tasks  where tasks.task_id = sub_tasks.task_id and sub_status in (6,7)")->result_array();
    	 return $this->load->view("admin_view/summary_finish",$data,true);
    }
    function get_fl($bid)
    {
        $sql = "select fl_code, count(fl_code) as c from units_views uv  where building_id =  $bid  GROUP BY fl_code  ORDER BY fl_code desc";
        return $this->db->query($sql)->result_array();
        
    }
    function room_max($bid)
    {
        $sql = "select max(fl.c) as rm from ( select fl_code, count(fl_code) as c from units_views uv  where building_id =  $bid
        GROUP BY fl_code  ORDER BY fl_code asc )  as fl";
        return $this->db->query($sql)->result_array();
    }
    function init_report()
    {
       $project = $this->db->query("select * from projects p1 where project_id = (select max(project_id)from projects p2)")->result_array();
       $building = $this->db->query("select * from buildings b1 where  building_id  = (select min(building_id) from buildings b2 where project_id =".$project[0]['project_id'].")")->result_array();
       $date =  $this->db->query("select date_format(now(),'%d/%m/%Y') as date2,date_format( min(task_date),'%d/%m/%Y') as date1  from tasks ")->result_array();
       $obj = array();
       $obj['project_id'] = $project[0]['project_id'];
       $obj['building_id'] = $building[0]['building_id'];
       $obj['vender_id'] = 0;
       $obj['task_type_id'] = 0;
       $obj['date1'] = $date[0]['date1'];
       $obj['date2'] = $date[0]['date2'];
       
       
       $this->session->set_userdata('matrix_info',$obj);
       
    }
    function matrix()
    {
      
       
        
        $info = $this->session->userdata('matrix_info');
        $building_id = $info['building_id'];
       
        $condition = "";
        if($info['task_type_id'])
        {
            $condition .= " and task_type_id in (".$info['task_type_id'].")" ;
        }
        if($info['vender_id'])
        {
            $condition  .=" and vender_id in (".$info['vender_id'].")";
            
        }
        $data['fl'] = $this->get_fl($building_id);
        $data['room_max'] =$this->room_max($building_id);
        $date_condition =" and DATEDIFF(t.task_date,STR_TO_DATE( '".$info['date1']."','%d/%m/%Y')) >=0
                          and DATEDIFF(t.task_date,STR_TO_DATE( '".$info['date2']."','%d/%m/%Y')) <=0";
                   
                        
        $sql ="SELECT t.unit_id,sub_status  from sub_task_views st,tasks t where t.task_id = st.task_id $condition $date_condition  order by  unit_id asc, sub_status desc";
        $data['tasks'] = $this->db->query($sql)->result_array();
        $data['sql'] = $sql;
       
        $sql = "select uv.unit_code,uv.unit_id,uv.fl_code  from units_views uv where building_id =  $building_id   ORDER BY  uv.fl_code desc";
       
        $data['units'] = $this->db->query($sql)->result_array();
       
       //print_r($_POST);
       return  $this->load->view("matrix",$data,true);
    }
    function matrix2()
    {
        $info = $this->session->userdata('matrix_info');
        if($info)
        {
            $building_id = $info['building_id'];
        }
        else
        {
             $building_id =5;
        }
       
        $condition = "";
        if($info['task_type_id'])
        {
            $condition .= " and task_type_id in (".$info['task_type_id'].")" ;
        }
        if($info['vender_id'])
        {
            $condition  .=" and vender_id in (".$info['vender_id'].")";
            
        }
        $data['fl'] = $this->get_fl($building_id);
        $data['room_max'] =$this->room_max($building_id);
        
        $sql ="SELECT unit_id,sub_status from  sub_task_views where 1 $condition group by unit_id";
        $data['tasks'] = $this->db->query($sql)->result_array();
        $data['sql'] = $sql;
       
        $sql = "select uv.unit_code,uv.unit_id,uv.fl_code  from units_views uv where building_id =  $building_id   ORDER BY  uv.fl_code desc";
       
        $data['units'] = $this->db->query($sql)->result_array();
       
       //print_r($_POST);
       return  $this->load->view("matrix2",$data,true);
    }
    function summary_report()
    {
      return	$this->load->view("admin_view/summary_report",null,true);
    }
    
    
    
}