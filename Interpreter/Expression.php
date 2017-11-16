<?php
abstract class Expression
{
    abstract public function interpreter($context);
}

class ImageExpression extends Expression
{
    public function interpreter($context) {
        echo '<img src="' . str_replace('[img]', '', $context) . '" ><br/>';
    }
}

class LinkExpression extends Expression
{
    public function interpreter($context) {
        echo '<a href="' . str_replace('[link]', '', $context) . '" >' . str_replace('[link]', '', $context) . '</a><br/>';
    }
}

class MarkExpression extends Expression
{
    public function interpreter($context) {
        echo '<span style="color: red;">' . str_replace('[mark]', '', $context) . '</span> ';
    }
}