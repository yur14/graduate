<?php

/* Admin\admin.twig */
class __TwigTemplate_d7f89bb7e54c8bd8a95da123a7279d99671b331410b3aa822f862ea41c159e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
        echo "</h1>
    <a class=\"btn btn-default\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
        echo "?/admin/logout\">
        <span class=\"glyphicon glyphicon-off\"></span>Выйти
    </a>
</div>

<div class=\"panel-group\" id=\"collapse-group\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el1\">Вопросы без ответа</a>
            </h4>
        </div>
        <div id=\"el1\" class=\"panel-collapse collapse\">
            <div class=\"panel-body table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Почта</th>
                        <th>Вопрос</th>
                        <th>Время</th>
                        <th>Категория</th>
                        <th></th>
                    </tr>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), "unanswered", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "email", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "                                    ";
                if (($this->getAttribute($context["question"], "category", array(), "array") == $this->getAttribute($context["category"], "id", array(), "array"))) {
                    // line 37
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
                    echo "
                                    ";
                }
                // line 39
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </td>
                            <td>
                                <form action=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
            echo "?/admin/edit\" method=\"POST\">
                                    <input type=\"hidden\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
            echo "\" name=\"id\">
                                    <input type=\"hidden\" value=\"unanswered\" name=\"type\">
                                    <button type=\"submit\" class=\"btn btn-default btn-xs\" title=\"Ответить\">
                                        <span class=\"glyphicon glyphicon-edit\"></span>
                                    </button>
                                    <br>
                                    <button type=\"submit\" name=\"action\" value=\"delete\"
                                            class=\"btn btn-default btn-xs\"
                                            title=\"Удалить\">
                                        <span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </table>
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el2\">Заблокированные вопросы</a>
            </h4>
        </div>
        <div id=\"el2\" class=\"panel-collapse collapse\">
            <div class=\"panel-body table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Почта</th>
                        <th>Вопрос</th>
                        <th>Время</th>
                        <th>Категория</th>
                        <th>Запрещенные слова</th>
                        <th></th>
                    </tr>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), "blocked", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 82
            echo "                        <tr>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "email", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 90
                echo "                                    ";
                if (($this->getAttribute($context["question"], "category", array(), "array") == $this->getAttribute($context["category"], "id", array(), "array"))) {
                    // line 91
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
                    echo "
                                    ";
                }
                // line 93
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                            </td>
                            <td>
                                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["words"]) ? $context["words"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                // line 97
                echo "                                    ";
                if (twig_in_filter($this->getAttribute($context["word"], "id", array(), "array"), $this->getAttribute($context["question"], "words", array(), "array"))) {
                    // line 98
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["word"], "word", array(), "array"), "html", null, true);
                    echo "<br>
                                    ";
                }
                // line 100
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </td>
                            <td>
                                <form action=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
            echo "?/admin/edit\" method=\"POST\">
                                    <input type=\"hidden\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
            echo "\" name=\"id\">
                                    <input type=\"hidden\" value=\"blocked\" name=\"type\">
                                    <button type=\"submit\" class=\"btn btn-default btn-xs\" title=\"Ответить\">
                                        <span class=\"glyphicon glyphicon-edit\"></span>
                                    </button>
                                    <br>
                                    <button type=\"submit\" name=\"action\" value=\"delete\"
                                            class=\"btn btn-default btn-xs\"
                                            title=\"Удалить\">
                                        <span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                </table>
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el3\">Вопросы с ответом</a>
            </h4>
        </div>
        <div id=\"el3\" class=\"panel-collapse collapse\">
            <div class=\"panel-body table-responsive\">
                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 132
            echo "                    <div>
                        <h3>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
            echo "</h3>
                        <table class=\"table table-bordered table-hover\">
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Почта</th>
                                <th>Вопрос</th>
                                <th>Ответ</th>
                                <th>Время</th>
                                <th></th>
                            </tr>
                            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), "answer", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 145
                echo "                                ";
                if (($this->getAttribute($context["question"], "category", array(), "array") == $this->getAttribute($context["category"], "id", array(), "array"))) {
                    // line 146
                    echo "                                    <tr>
                                        <td>";
                    // line 147
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "email", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answers", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "time", array(), "array"), "html", null, true);
                    echo "</td>
                                        <td>
                                            <form action=\"";
                    // line 154
                    echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
                    echo "?/admin/edit\" method=\"POST\">
                                                <input type=\"hidden\" value=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array(), "array"), "html", null, true);
                    echo "\" name=\"id\">
                                                <input type=\"hidden\" value=\"answer\" name=\"type\">
                                                <button type=\"submit\" class=\"btn btn-default btn-xs\"
                                                        title=\"Редактировать\">
                                                    <span class=\"glyphicon glyphicon-edit\"></span>
                                                </button>
                                                <br>
                                                <button type=\"submit\" name=\"action\" value=\"delete\"
                                                        class=\"btn btn-default btn-xs\"
                                                        title=\"Удалить\">
                                                    <span class=\"glyphicon glyphicon-trash\"></span>
                                                </button>
                                                <br>
                                                ";
                    // line 168
                    if (($this->getAttribute($context["question"], "hidden", array(), "array") == "0")) {
                        // line 169
                        echo "                                                    <button type=\"submit\" name=\"action\" value=\"hidden\"
                                                            class=\"btn btn-default btn-xs\"
                                                            title=\"Скрыть\">
                                                        <span class=\"glyphicon glyphicon-eye-close\"></span>
                                                    </button>
                                                ";
                    } else {
                        // line 175
                        echo "                                                    <button type=\"submit\" name=\"action\" value=\"open\"
                                                            class=\"btn btn-default btn-xs\"
                                                            title=\"Открыть\">
                                                        <span class=\"glyphicon glyphicon-eye-open\"></span>
                                                    </button>
                                                ";
                    }
                    // line 181
                    echo "                                            </form>
                                        </td>
                                    </tr>
                                ";
                }
                // line 185
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                        </table>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el4\">Список категорий</a>
            </h4>
        </div>
        <div id=\"el4\" class=\"panel-collapse collapse \">
            <div class=\"panel-body table-responsive\">
                <table class=\"table table-bordered table-hover table-condensed\">
                    <tr>
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Без ответа</th>
                        <th>Заблокированные</th>
                        <th>С ответом<br>всего/скрытых</th>
                    </tr>
                    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 209
            echo "                        <tr>
                            <td>";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"POST\" action=\"";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
            echo "?/admin/category\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array(), "array"), "html", null, true);
            echo "\">
                                    <input type=\"text\" name=\"title\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array(), "array"), "html", null, true);
            echo "\">
                                    <button type=\"submit\" name=\"action\" value=\"save\"
                                            class=\"btn btn-default btn-xs\"
                                            title=\"Сохранить\">
                                        <span class=\"glyphicon glyphicon-ok\"></span>
                                    </button>
                                    <button type=\"submit\" name=\"action\" value=\"delete\"
                                            class=\"btn btn-default btn-xs\"
                                            title=\"Удалить\">
                                        <span class=\"glyphicon glyphicon-trash\"></span>
                                    </button>
                                </form>
                            </td>
                            <td>";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "unanswered", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "blocked", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "answer", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "hidden", array(), "array"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                </table>
                <form method=\"POST\" action=\"";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
        echo "?/admin/category\">
                    <p>
                        <lable id=\"name\">Добавить:</lable>
                        <input id=\"name\" type=\"text\" name=\"title\" placeholder=\"Заголовок\">
                        <button type=\"submit\" name=\"action\" value=\"add\"
                                class=\"btn btn-default\"
                                title=\"Добавить\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                        </button>
                        <span style=\"color: chocolate\">*Пустой заголовок не сохранится</span>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el5\">Список ключевых слов</a>
            </h4>
        </div>
        <div id=\"el5\" class=\"panel-collapse collapse table-responsive\">
            <div class=\"container\">
                <p>*Слова или словосочетание разделяются запятой и пробелом
                    <br><span style=\"color: #a9c056\">Пример: \"Слово, очень плохое слово\"</span>
                    <br><span style=\"color: #dd4444\">Плохой пример: \"Сло во , оченьплохое слово, \"</span>
                </p>
                <form method=\"POST\" action=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
        echo "?/admin/dictionary\">
                    <textarea name=\"dictionary\" cols=\"40\" rows=\"3\">";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["dictionary"]) ? $context["dictionary"] : null), "html", null, true);
        echo "</textarea>
                    <br><br>
                    <button type=\"submit\" class=\"btn btn-default\" title=\"Сохранить\">
                        <span class=\"glyphicon glyphicon-ok-circle\"></span>Сохранить
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#collapse-group\" href=\"#el6\">Список администраторов</a>
            </h4>
        </div>
        <div id=\"el6\" class=\"panel-collapse collapse\">
            <div class=\"panel-body table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <tr>
                        <th>ID</th>
                        <th>Данные</th>
                    </tr>
                    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 284
            echo "                        <tr>
                            <td>";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"POST\" action=\"";
            // line 287
            echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
            echo "?/admin/admin\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array(), "array"), "html", null, true);
            echo "\">
                                    <input type=\"text\" name=\"login\" value=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "login", array(), "array"), "html", null, true);
            echo "\">
                                    <input type=\"text\" name=\"password\" placeholder=\"password\">
                                    <button type=\"submit\" name=\"action\" value=\"save\"
                                            class=\"btn btn-default btn-xs\"
                                            title=\"Сохранить\">
                                        <span class=\"glyphicon glyphicon-refresh\"></span>
                                    </button>
                                    ";
            // line 296
            if (($this->getAttribute($context["admin"], "id", array(), "array") != 1)) {
                // line 297
                echo "                                        <button type=\"submit\" name=\"action\" value=\"delete\"
                                                class=\"btn btn-default btn-xs\"
                                                title=\"Удалить\">
                                            <span class=\"glyphicon glyphicon-trash\"></span>
                                        </button>
                                    ";
            }
            // line 303
            echo "                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                </table>
                <form method=\"POST\" action=\"";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["thisHost"]) ? $context["thisHost"] : null), "html", null, true);
        echo "?/admin/admin\">
                    <p>
                        <lable id=\"name\">Добавить:</lable>
                        <input id=\"name\" type=\"text\" name=\"login\" placeholder=\"login\">
                        <input id=\"name\" type=\"text\" name=\"password\" placeholder=\"password\">
                        <button type=\"submit\" name=\"action\" value=\"add\"
                                class=\"btn btn-default\"
                                title=\"Добавить\">
                            <span class=\"glyphicon glyphicon-plus\"></span>
                        </button>
                        <span style=\"color: chocolate\">
                            *Логин и пароль должны состоят из цифр и букв латинского альфавита
                        </span>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Admin\\admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 308,  568 => 307,  559 => 303,  551 => 297,  549 => 296,  539 => 289,  535 => 288,  531 => 287,  526 => 285,  523 => 284,  519 => 283,  494 => 261,  490 => 260,  460 => 233,  457 => 232,  446 => 229,  442 => 228,  438 => 227,  422 => 214,  418 => 213,  414 => 212,  409 => 210,  406 => 209,  402 => 208,  381 => 189,  373 => 186,  367 => 185,  361 => 181,  353 => 175,  345 => 169,  343 => 168,  327 => 155,  323 => 154,  318 => 152,  314 => 151,  310 => 150,  306 => 149,  302 => 148,  298 => 147,  295 => 146,  292 => 145,  288 => 144,  274 => 133,  271 => 132,  267 => 131,  253 => 119,  232 => 104,  228 => 103,  224 => 101,  218 => 100,  212 => 98,  209 => 97,  205 => 96,  201 => 94,  195 => 93,  189 => 91,  186 => 90,  182 => 89,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  161 => 83,  158 => 82,  154 => 81,  129 => 58,  108 => 43,  104 => 42,  100 => 40,  94 => 39,  88 => 37,  85 => 36,  81 => 35,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  57 => 28,  53 => 27,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin\\admin.twig", "C:\\OpenServer\\domains\\graduate\\content\\Admin\\admin.twig");
    }
}
