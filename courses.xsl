<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body1 style="font-family:Arial;font-size:24pt;background-color:#EEEEEE;">
  <xsl:for-each select="course">
    <div style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF; ; color:white; padding:4px">
    <span style="font-weight:bold; margin-left:3em"><xsl:value-of select="subject"/> - </span>
    <xsl:value-of select="tutor"/>
  </div>
  <div style="margin-left:5em; font-size:15pt">
    <p>
    <xsl:value-of select="description"/>
    <span style="font-style:italic"> (<xsl:value-of select="duration"/> )</span>
    </p>
  </div>
  <div style ="margin-left: 5em;  font-size:15pt">
    <p>
      
      <a href="{url}">
       <xsl:value-of select="button"/>
    </a>
      
    </p>
  </div>
  <!--<div style ="margin-left: 5em;  font-size:15pt">
    <p>
      
      <a href="{url1}">
       <xsl:value-of select="button1"/>
    </a>
      
    </p>
  </div>-->
  
</xsl:for-each>
 
</body1>
</html>
</xsl:template>
</xsl:stylesheet>