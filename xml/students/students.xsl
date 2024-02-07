<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<xsl:choose>
<xsl:when test="section = 'D'">
<p><xsl:value-of select="studentList/student/name/fName"/><xsl:value-of select="studentList/student/name/lName"/></p>
</xsl:when>
</xsl:choose>
</body>
</html>
</xsl:template>
</xsl:stylesheet>