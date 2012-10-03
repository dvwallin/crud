<?php

// Här har jag redan tillgång till databasen eftersom vi autoloaded db classen
//vi använder oss av active records

//Här hämtar vi inlägg från databsen från table "blog"
class Site_model extends CI_Model {
	function get_from_db() {
		$query = $this->db->get('blog');
		return $query->result();
	}
	
	
//Här lägger vi till i databasen med hjälp av $data så kalla vi på en array i site.php	
	function add_to_db($data){
		$this->db->insert('blog', $data);
		
		return;
	}
	
//Här lägger vi till i databasen med hjälp av $data så kalla vi på en array i site.php	, Enkelt varitant då vi sätter ett id som ska uppdateras.	
// Jag lyckas inte uppdatera , det id man klickar på det är något jag ínte ser , jag har fel sökt men inte hittat felet.
	function update_db($data) {
	//	$this->db->where('id', 17);
	//	$this->db->update('blog', $data);
	$this->db->where('id', $id);
	 $this->db->update('blog', $data);
	
	
	
	
	

}

	// Produces:
	// UPDATE mytable 
	// SET title = '{$title}', name = '{$name}', date = '{$date}'
	// WHERE id = $id
	
	
	// uri är en automatisk laddad , det är en codeigniter class.
	// segment: Segment 3 är t.ex /index/site/4. Dår kommer vi åt 3dje segmentet.
	function delete_from_db(){
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('blog');
	}
	
}