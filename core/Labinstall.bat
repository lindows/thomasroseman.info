

%windir%\system32\icacls.exe %windir%\system32\winevt\ /grant "local service":F /T >%temp%\icacls1.log

%windir%\system32\icacls.exe %windir%\system32\winevt\logs /grant "Authenticated Users":M /T >%temp%\icacls.log

\\psbdcl1\sitesoft\labsoft\office2013\32bit\setup.exe /adminfile \\psbdcl1\sitesoft\labsoft\office2013\32bit\labsetup.msp

rem PAUSE

