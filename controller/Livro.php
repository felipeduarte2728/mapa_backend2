<?php 
   class Livro {
      private $id;
      private $titulo;
      private $paginas;
      private $edicao;
      private $isbn;
      private $ano;
      private $foto;
      private $editora;
      private $autor;


      // retorna o valor do atributo privado
      public function getId() {
         return $this->id;
      }  

      // seta um valor ao atributo da classse 
      public function setId($id) {
         $this->id = $id;
      }

      public function getPaginas() {
         return $this->paginas;
      }  

      public function setPaginas($paginas) {
         $this->paginas = $paginas;
      }

      public function getEdicao() {
         return $this->edicao;
      }  

      public function setEdicao($edicao) {
         $this->edicao = $edicao;
      }

      public function getIsbn() {
         return $this->isbn;
      }  

      public function setIsbn($isbn) {
         $this->isbn = $isbn;
      }

      public function getAno() {
         return $this->ano;
      }  

      public function setAno($ano) {
         $this->ano = $ano;
      }

      public function getFoto() {
         return $this->foto;
      }  

      public function setFoto($foto) {
         $this->foto = $foto;
      }

      public function getEditora() {
         return $this->editora;
      }  

      public function setEditora($editora) {
         $this->editora = $editora;
      }

      public function getAutor() {
         return $this->autor;
      }  

      public function setAutor($autor) {
         $this->autor = $autor;
      }

   }

?>