<?php
class view extends config {
    public function viewData(){
        $con = $this -> con();
        $sql = "SELECT *  FROM tbl_todolist WHERE status = 'PENDING'";
        $data = $con -> prepare($sql);
        $data -> execute();
        $result = $data -> fetchAll(PDO::FETCH_ASSOC);
        echo "<h3 class = 'mb-4'>Pending Task</h3>";
        echo "<table class = 'table'>";
        echo "<thead>
                <tr>
                <th>Task Item</th>
                <th>Action</th>
                </tr>
                </thead><tbody>";
                foreach($result as $data){
                    echo"<tr>";
                    echo "<td>$data[item]</td>";
                    echo "<td>
                    <a href = 'index.php?edit=$data[id]'>Mark as Completed</a>
                    <a href = 'index.php?delete=$data[id]'>Delete Task</a>
                    </td>";
                    echo"</tr>";

                }
                    echo"</tbody></table>";
    }
    public function viewCompletedData(){
        $con = $this -> con();
        $sql = "SELECT *  FROM tbl_todolist WHERE status =  'COMPLETED'";
        $data = $con -> prepare($sql);
        $data -> execute();
        $result = $data -> fetchAll(PDO::FETCH_ASSOC);
        echo "<h3 class = 'mb-4'>Completed Task</h3>";
        echo "<table class = 'table'>";
        echo "<thead>
                <tr>
                <th>Task Item</th>
                <th>Date Completed</th>
                </tr>
                </thead><tbody>";
                foreach($result as $data){
                    echo"<tr>";
                    echo "<td>$data[item]</td>";
                    echo "<td>$data[date_completed]</td>";
                    echo"</tr>";

                }
                    echo"</tbody></table>";
    }

}