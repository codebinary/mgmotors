<?php
require_once 'conx/config.php';

class Noticias{
	
	// Show 3 Noticias and Noticia Principal if()
	public function showNoticias(){
		if ($noticiasHome = mysqli_query(conx::conectar(), "CALL showHomeNoticias()")) {
			while ($row = $noticiasHome->fetch_object()){
			  $noticias[] = $row;
			}
			mysqli_free_result($noticiasHome);
		}
		mysqli_close(conx::conectar());
		return $noticias;
	}

	// Detail Noticias
	public function showNoticia($id){
		if ($noticiaHome = mysqli_query(conx::conectar(), "CALL showNoticia($id)")) {
			while ($row = $noticiaHome->fetch_object()){
			  $noticia[] = $row;
			}
			mysqli_free_result($noticiaHome);
		}
		mysqli_close(conx::conectar());
		return $noticia;
	}

	// Show Noticias 5 and pagination
	public function listNoticias($start, $limit){
		if ($noticiasList = mysqli_query(conx::conectar(), "CALL limitNoticias($start, $limit)")) {
			while ($row = $noticiasList->fetch_object()){
			  $noticias[] = $row;
			}
			mysqli_free_result($noticiasList);
		}
		mysqli_close(conx::conectar());
		return $noticias;
	}

	// Show 3 Noticias ---> three
	public function listThreeNoticias(){
		// call limitNoticias(0, 3)
		if ($noticiasRight = mysqli_query(conx::conectar(), "CALL limitNoticias(0, 3)")) {
			while ($row = $noticiasRight->fetch_object()){
			  $noticias[] = $row;
			}
			mysqli_free_result($noticiasRight);
		}
		mysqli_close(conx::conectar());
		return $noticias;
	}

	// Total Noticias
	public function totalNoticias(){
		if ($noticiaTotal = mysqli_query(conx::conectar(), "CALL totalNoticias()")) {
			while ($row = $noticiaTotal->fetch_object()){
			  $noticiaT[] = $row;
			}
			mysqli_free_result($noticiaTotal);
		}
		mysqli_close(conx::conectar());
		return $noticiaT;
	}
}


function cutText($text, $lenght = 0, $txt = true){
  if($txt){
    // $textA = strip_tags(preg_replace("/<img[^>]+\>/i", " ", $text));
    $textA = preg_replace("/<img[^>]+\>/i", " ", $text);

    if($lenght != null){
	    $textN = strlen($textA) > $lenght ? substr($textA, 0, $lenght)." ..." : $textA;
    } else {
    	$textN = $textA;
    }
  } else {
		$textN = '';
    ob_start();
    ob_end_clean();
    preg_match_all("/<img[\s]+[^>]*?src[\s]?=[\s\"\']+(.*\.([gif|jpg|png|jpeg]{3,4}))[\"\']+.*?>/", $text, $image);
    $textN = $image [1][0];
    if(empty($textN)){
	    $textN = '';
    }
  }    
  return $textN;
}