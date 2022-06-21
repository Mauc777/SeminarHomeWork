               ***ОПИСАНИЕ**
__1.  в шапке не хватает <?xml version="1.0" encoding="utf-8"?> там же мы определяем кодировку док-та__
__2. </password> нужно писать внутри корневого  <doRegister></doRegister>__
__3. в остальном все верно__



<!-- Не верно  
<doRegister>
   <email>olga@gmail.com</email>
   <name>Ольга</name>
   <password>1
</doRegister>
</password>
-->


<!-- Верно -->
<?xml version="1.0"?>
   <doRegister>
      <email>olga@gmail.com</email>
      <name>Ольга</name>
      <password>1</password>
   </doRegister>
</xml>   
