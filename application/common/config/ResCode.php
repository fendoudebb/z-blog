<?php

namespace app\common\config;


class ResCode {

    public static $res_code = [
        self::BAD_REQUEST => 'bad_request',
        self::UNAUTHORIZED => 'unauthorized',
        self::FORBIDDEN => 'forbidden',
        self::INTERNAL_SEVER_ERROR => 'internal_sever_error',
        self::URL_NOT_EXIST => 'url not exist',
        self::REQUEST_FAIL => 'request fail',
        self::REQUEST_SUCCESS => 'request success',

        self::MISSING_PARAMS_USERNAME_OR_PASSWORD => "missing params: username or password",
        self::MISSING_PARAMS_TOPIC => "missing params: topic",
        self::MISSING_PARAMS_POST_ID => "missing params: post id",
        self::MISSING_PARAMS_TOPICS => "missing params: topics",
        self::MISSING_PARAMS_WORD => "missing params: word",
        self::MISSING_PARAMS_TRANSLATION => "missing params: translation",
        self::MISSING_PARAMS_PROPERTY => "missing params: property",
        self::MISSING_PARAMS_EXPLANATION => "missing params: explanation",


        self::ILLEGAL_ARGUMENT_POST_ID => "illegal argument: post id",
        self::ILLEGAL_ARGUMENT_TOPIC => "illegal argument: topic",
        self::ILLEGAL_ARGUMENT_TOPIC_ID => "illegal argument: topic id",
        self::ILLEGAL_ARGUMENT_TOPIC_NAME => "illegal argument: topic name",
        self::ILLEGAL_ARGUMENT_AUDIT_STATUS => "illegal argument: audit status",
        self::ILLEGAL_ARGUMENT_COMMENT_ID => "illegal argument: comment id",
        self::ILLEGAL_ARGUMENT_LINK_ID => "illegal argument: link id",
        self::ILLEGAL_ARGUMENT_LINK => "illegal argument: link",
        self::ILLEGAL_ARGUMENT_WEBSITE_NAME => "illegal argument: website name",
        self::ILLEGAL_ARGUMENT_LINK_OWNER => "illegal argument: link owner",
        self::ILLEGAL_ARGUMENT_WORD => "illegal argument: word",
        self::ILLEGAL_ARGUMENT_TRANSLATION_ELEMENT => "illegal argument: translation element",



        self::COLLECTION_INSERT_FAIL => "collection insert fail",
        self::COLLECTION_UPDATE_FAIL => "collection update fail",



        self::USERNAME_OR_PASSWORD_ERROR => 'username or password error',
        self::POST_DOES_NOT_EXIST => "post does not exist",
        self::POST_IS_NOT_ONLINE => "post is not online",
        self::POST_TOPIC_DOES_NOT_EXIST => "post topic does not exist",
        self::POST_TOPIC_ALREADY_EXIST => "post topic already exists",
        self::OVER_POST_TOPIC_COUNT => "over post topic count",
        self::POST_COMMENT_IS_EMPTY => "post comment is empty",
        self::REPLY_CONTENT_IS_EMPTY => "reply content is empty",
        self::WORD_ALREADY_EXIST => "word already exist",




    ];

    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const INTERNAL_SEVER_ERROR = 500;

    const URL_NOT_EXIST = -2;
    const REQUEST_FAIL = -1;
    const REQUEST_SUCCESS = 200;

    //---missing params const start---
    const MISSING_PARAMS_USERNAME_OR_PASSWORD = 1000;
    const MISSING_PARAMS_POST_ID = 1001;
    const MISSING_PARAMS_TOPIC = 1002;
    const MISSING_PARAMS_TOPICS = 1003;
    const MISSING_PARAMS_WORD = 1004;
    const MISSING_PARAMS_TRANSLATION = 1005;
    const MISSING_PARAMS_PROPERTY = 1006;
    const MISSING_PARAMS_EXPLANATION = 1007;
    //---missing params const end---


    //---illegal argument const start---
    const ILLEGAL_ARGUMENT_POST_ID = 2000;
    const ILLEGAL_ARGUMENT_TOPIC = 2001;
    const ILLEGAL_ARGUMENT_TOPIC_ID = 2002;
    const ILLEGAL_ARGUMENT_TOPIC_NAME = 2003;
    const ILLEGAL_ARGUMENT_AUDIT_STATUS = 2004;
    const ILLEGAL_ARGUMENT_COMMENT_ID = 2005;
    const ILLEGAL_ARGUMENT_LINK_ID = 2006;
    const ILLEGAL_ARGUMENT_LINK = 2007;
    const ILLEGAL_ARGUMENT_WEBSITE_NAME = 2008;
    const ILLEGAL_ARGUMENT_LINK_OWNER = 2009;
    const ILLEGAL_ARGUMENT_USERNAME = 2010;
    const ILLEGAL_ARGUMENT_PASSWORD = 2011;
    const ILLEGAL_ARGUMENT_ROLES = 2012;
    const ILLEGAL_ARGUMENT_WORD = 2013;
    const ILLEGAL_ARGUMENT_TRANSLATION_ELEMENT = 2014;
    //---illegal argument const end---


    const COLLECTION_INSERT_FAIL = 3000;
    const COLLECTION_UPDATE_FAIL = 3001;


    //---error code const start---
    const USERNAME_OR_PASSWORD_ERROR = 4000;
    const POST_DOES_NOT_EXIST = 4001;
    const POST_IS_NOT_ONLINE = 4002;
    const POST_TOPIC_DOES_NOT_EXIST = 4003;
    const POST_TOPIC_ALREADY_EXIST = 4004;
    const OVER_POST_TOPIC_COUNT = 4005;
    const POST_COMMENT_IS_EMPTY = 4006;
    const REPLY_CONTENT_IS_EMPTY = 4007;
    const WORD_ALREADY_EXIST = 4008;
    //---error code const end---


}