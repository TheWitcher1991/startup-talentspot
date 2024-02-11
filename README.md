<p align="center">
    <img src="templates/src/images/static/logo.png" alt=""
        width="60" align="center"
    /> 
    <h1 align="center">Веб-сервис «TalentSpot»</h1>
</p>

### © ООО «ТАЛЕНТСПОТ»

TalentSpot — информационный сервис в виде интернет-портала, который связывает квалифицированных соискателей и работодателей для удовлетворения потребностей в рабочей силе, с внедрением алгоритмов автоматизации процесса найма кадров

> [!NOTE]\
> Проект находится на стадии разработки. 
> Сервис создается  при поддержке гранта <a href="https://fasie.ru/">Фонда содействия инновациям</a>, предоставляемого 
> в рамках программы «Студенческий стартап» федерального проекта <a href="https://univertechpred.ru/">«Платформа университетского технологического предпринимательства»</a>


## Стек технологий


<div align="left">  
<a href="https://www.python.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/python-original.svg" alt="Python" height="50" /></a>
<a href="https://www.djangoproject.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/django-original.svg" alt="Django" height="50" /></a>
<a href="https://www.javascript.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/javascript-original.svg" alt="JavaScript" height="50" /></a>
<a href="https://nodejs.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/nodejs-original-wordmark.svg" alt="Node.js" height="50" /></a>
<a href="https://reactjs.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/react-original-wordmark.svg" alt="React" height="50"></a><a href="https://webpack.js.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/webpack-original.svg" alt="Webpack" height="50" /></a>
<a href="https://www.postgresql.org/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/postgresql-original-wordmark.svg" alt="PostgreSQL" height="50" /></a>
<a href="https://sass-lang.com/" target="_blank"><img style="margin: 10px" src="https://profilinator.rishav.dev/skills-assets/sass-original.svg" alt="Sass" height="50" /></a>  
</div>

## Версии 

apache + uwsgi

- Python version 3.12.0
- Django version 4.2.8
- Django rest framework version 3.14.0
- NodeJS version 18.12.1
- ReactJS version ^18.2.0
- Webpack version ^5.89.0

## Схема работы веб-сервиса

```mermaid
graph LR;
    client-->HTTP
    HTTP-->Router
    Router-->View
    Template-->View
    View-->Middleware
    View-->Serializers
    Serializers-->View
    Serializers-->Model
    Model-->Serializers
    Model-->Database
    Database-->Model
    Middleware-->|HTTP Response| client 
```

### © ООО «ТАЛЕНТСПОТ»

- ИНН – 2623034058
- КПП – 262301001
- ОГРН – 1232600016065
