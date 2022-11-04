@ECHO OFF
cls
goto :home

:index
if "%valor%" == "--version" (goto :opcao1)
if "%valor%" == "--help" (goto :opcao2)
if "%valor%" == "--date" (goto :opcao3)

:home
set /p valor=Digite um comando no prompt:
goto :index

:opcao1
cls
echo Versao 6.6.7.6.
pause
goto :home

:opcao2
cls
echo --version     INFORMA A VERSAO DO SISTEMA
echo --help        INFORMA OS COMANDOS DO SISTEMA
echo --date        INFORMA A DATA DO COMPUTADOR
pause
goto :home

:opcao3
cls
date /t
pause
goto :home
