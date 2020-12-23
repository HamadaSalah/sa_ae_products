<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lang  => {{ LaravelLocalization::getCurrentLocale() }}</title>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  @if (language() == 'ar')
  <link rel="stylesheet" href="{{asset('/css/bootstrap-rtl.min.css')}}">
@endif