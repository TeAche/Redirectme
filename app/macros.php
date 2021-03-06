<?php

Form::macro("field", function($options)
    {
        $markup = "";

        $type = "text";

        if(!empty($options["type"]))
        {
            $type = $options["type"];
        }

        if(empty($options["name"]))
        {
            return;
        }

        $name = $options["name"];

        $label = "";

        if(!empty($options["label"]))
        {
            $label = $options["label"];
        }

        $value = Input::old($name);

        if(!empty($options["value"]))
        {
            $value = Input::old($name, $options["value"]);
        }

        $placeholder = "";

        if(!empty($options["placeholder"]))
        {
            $placeholder = $options["placeholder"];
        }

        $class = "";

        if(!empty($options["class"]))
        {
            $class = $options["class"];
        }

        $parameters = array(
            "class"         => "form-control" . $class,
            "placeholder"   => $placeholder
        );

        $error = "";

        if(!empty($options["form"]))
        {
            $error = $options["form"]->getError($name);
        }

        if($type !== "hidden")
        {
            $markup .= "<div class='form-group";
            $markup .= ($error ? " has-error" : "");
            $markup .= "'>";
        }

        switch($type)
        {
            case "text":
            {
                /*$markup .= Form::label($name, $label, array(
                    "class" => "control-label"
                ));*/

                $markup .= Form::text($name, $value, $parameters);

                break;
            }

            case "password":
            {
                $markup .= Form::label($name, $label, array(
                    "class" => "control-label"
                ));

                $markup .= Form::password($name, $parameters);

                break;
            }

            case "checkbox":
            {
                $markup .= "<div class='checkbox'>";
                $markup .= "<label>";
                $markup .= Form::checkbox($name, $value, $value);
                $markup .= " " . $label;
                $markup .= "</label>";
                $markup .= "</div>";

                break;
            }

            case "hidden":
            {
                $markup .= Form::hidden($name, $value);
                break;
            }
        }

        if($error)
        {
            $markup .= "<span class=''help-block>";
            $markup .= $error;
            $markup .= "</span>";
        }

        if($type != "hidden")
        {
            $markup .= "</div>";
        }

        return $markup;
    }
);

Form::macro("category", function($options)
{
    $markup = "";

    if(!empty($options['class']))
    {
        $class = $options['class'];
    }

    if(!empty($options['span']))
    {
        $span = $options['span'];
    }

    if(!empty($options['h5']))
    {
        $h5 = $options['h5'];
    }

    if(!empty($options['p']))
    {
        $p = $options['p'];
    }

    if(!empty($options['a']))
    {
        $a = $options['a'];
    }

    if(!empty($options['href']))
    {
        $href = URL::route($options['href']);
    } else {
        $href = URL::route("front/index");
    }

    $markup .= "<li>
                    <div class='thumbnail'><i class='icon-$class'></i>
                        <h3><span>$span</span></h3>
                        <h5>$h5</h5>
                        <p>$p</p>
                        <a href=$href class='btn'>$a</a></div>
                </li>";

    return $markup;
});

Form::macro("table", function($options)
{
    $markup = "";
    $header = "";
    $cells = "";

    if($options['size'] < 1)
    {
        return;
    }

    $size = $options['size'];

    if(!empty($options['head']))
    {
        $head = $options['head'];
    }

    for($i = 0; $i < $size; $i++)
    {
        $header .= "<th>" . $head[$i] . "</th>";
    }

    if(!empty($options['baseroute']) && (!empty($options['edit'])))
    {
        $baserouteedit = URL::route($options['baseroute'] . "/edit") . "?id=";
        $header .= "<th>Edit</th>";
    }

    if(!empty($options['baseroute']) && (!empty($options['delete'])))
    {
        $baseroutedelete = URL::route($options['baseroute'] . "/delete") . "?id=";
        $header .= "<th>Delete</th>";
    }

    if(!empty($options['rows']))
    {
        $rows = $options['rows'];
    }

    for($i = 0; $i < count($rows)/$size; $i++)
    {
        $cells .= "<tr>";

        for($j = 0; $j < $size; $j++)
        {
            $cells .= "<td>" . $rows[$i*$size+$j] . "</td>";
        }

        if((!empty($baserouteedit)) && (!empty($options['edit']) && ($options['edit']==true)))
        {
            $cells .= "<td><a href=" . $baserouteedit . $rows[$i*$size] . ">Edit</a></td>";
        }

        if((!empty($baseroutedelete)) && !empty($options['delete']) && ($options['delete']==true))
        {
            $cells .= "<td><a href=" . $baseroutedelete . $rows[$i*$size] . ">Delete</a></td>";
        }

        $cells .= "</tr>";
    }

    $markup .= "
        <table class='table table-bordered'>" . $header . "
            " . $cells . "
        </table>
    ";

    return $markup;
});

Form::macro("paginator", function ($options)
{
    $markup = "";
    $links = "";

    if(!empty($options['items'])) {
        $items = $options['items'];
    }

    foreach ($items as $route=>$item)
    {
        $links .= '<li><a href=' . $route . '>' . $item . '</a></li>';
    }

    $hrefprev = URL::route('test');
    $hrefnext = URL::route('test');

    $markup .= "
        <div class='pagination'>
            <ul>
            <li><a href=$hrefprev>Prev</a></li>
            " . $links . "
            <li><a href=$hrefnext>Next</a></li>
            </ul>
        </div>
    ";

    return $markup;
});

Form::macro("dropdown", function($options)
{
    $markup = "";
    $links = "";
    if(!empty($options['head']))
    {
        $head = $options['head'];
    }
    if(!empty($options['items']))
    {
        $items = $options['items'];
    }
    foreach ($items as $route=>$item)
    {
        $links .= "<li><a href=" . $route . ">" . $item . "</a></li>";
    }
    $markup .= "
        <ul class='nav nav-tabs'>
            <li class='dropdown'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    " . $head . "<b class='caret'></b>
                </a>
                <ul class='dropdown-menu'>
                " . $links . "
                </ul>
            </li>
        </ul>
    ";

    return $markup;
});

Form::macro("breadcrumbs", function($options)
{
    $markup = "";
    $links = "";
    if(!empty($options['items']))
    {
        $items = $options['items'];
    }

    $active = $options['active'];
    foreach ($items as $route=>$item)
    {
        if ($item == $active) break;
        $links .= "
            <li>
                <a href=$route>$item</a>
                <span class='divider'>/</span>
            </li>
        ";
    }
    $markup = "
        <ul class='breadcrumb'>
            " . $links . "
            <li class='active'>$active</li>
        </ul>
    ";

    return $markup;
});