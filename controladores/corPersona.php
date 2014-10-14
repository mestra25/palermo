<?
require_once("../modelos/CLASES/proveedor.php");
require_once("../modelos/DAO/ProveedorDao.php");

$idproveedor=$_POST['txtidproveedor'];
$nit=$_POST['txtnit'];
$direccion=$_POST['txtdireccion'];
$telefono=$_POST['txttelefono'];
$email=$_POST['txtemail'];
$web=$_POST['txtweb'];
$contac=$_POST['txtcontac'];
$replegal=$_POST['txtreplegal'];
$cedRep=$_POST["txtcedRep"];
$celRep=$_POST["txtcelRep"];

$lobjPersona = new clsPersona($lcCedula,$lcNombre,$lcApellido,$lcSexo,$lcFechanacimiento,$lcTelefono,$lcEmail,$lcDireccion);

 
if($lcOperacion=="buscar")
{
if($lobjPersona->buscar()){
$lcCedula=$lobjPersona->get_cedula();
$lcNombre=$lobjPersona->get_nombre();
$lcApellido=$lobjPersona->get_apellido();
$lcSexo=$lobjPersona->get_sexo();
$lcDireccion=$lobjPersona->get_direccion();
$lcTelefono=$lobjPersona->get_telefono();
$lcEmail=$lobjPersona->get_email();
$lcFechanacimiento=$lobjPersona->get_Fecha_nacimiento(); 
$lcListo = 1;
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcCedula=$lcCedula&lcNombre=$lcNombre&lcApellido=$lcApellido&lcSexo=$lcSexo&lcDireccion=$lcDireccion&lcTelefono=$lcTelefono&lcEmail=$lcEmail&lcFechanacimiento=$lcFechanacimiento&lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>";
}else{
$lcListo = 0;
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>";
}
}
   
   
if($lcOperacion=="incluir")
{
if($lobjPersona->buscar()){
$lcListo = 0;
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>";
}else{
$lcListo = 1;
$lobjPersona->incluir();  
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>";
}
}
   
   
   
if($lcOperacion=="modificar")
{
$lobjPersona->modificar();
$lcListo = 1;
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>";
}
   
if($lcOperacion=="eliminar")
{
$lobjPersona->eliminar();   
$lcListo = 1;
echo "<script>
location.href=\"../vistas/vistaPersona.php?lcOperacion=$lcOperacion&lcListo=$lcListo\";
</script>"; 
}
?>