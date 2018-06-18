if WScript.Arguments.Count < 2 Then
    WScript.Echo "Por favor indica os ficheiros a usar Uso: nomedoscript.vbs nomedoexcel.xls/xlsx nomeficheirodestino.csv" 'ex: teste1.vbs turnos.xlsx turnos.csv
    Wscript.Quit
End If

csv_format = 6 '6 e referencia para csv no excel

Set objFSO = CreateObject("Scripting.FileSystemObject") 'cria instancia de scripting

src_file = objFSO.GetAbsolutePathName(Wscript.Arguments.Item(0)) 'busca o caminho para o ficheiro de origem
dest_file = objFSO.GetAbsolutePathName(WScript.Arguments.Item(1)) 'busca o nome para o ficheiro de destino(devera usar a mesma pasta que o de origem)

Dim oExcel
Set oExcel = CreateObject("Excel.Application") 'criamos uma instancia de excel

Dim oBook
Set oBook = oExcel.Workbooks.Open(src_file) 'abrimos o ficheiro de origem na instancia oExcel
oExcel.DisplayAlerts=False 'desligamos os alertas
oBook.SaveAs dest_file, csv_format 'gravamos o ficheiro em csv.Infelizmente,ele ira ser guardado em csv ANSI

oBook.Close False 'fechamos o excel
oExcel.Quit 'e a sua instancia


Set objShell = CreateObject("Wscript.Shell") 'criamos instancia de shell
objShell.run("powershell.exe -file .\teste.ps1 ") 'e abrimos o ficheiro PS1 que ira converter o nosso csv ANSI para csv UTF-8