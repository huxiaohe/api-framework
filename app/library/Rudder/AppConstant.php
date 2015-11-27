<?php 

namespace Rudder;

class AppConstant {
    /**
     * 登录拦截标志
     */
    const HTTP_INTERCEPT_LOGIN = "HTTP_INTERCEPT_LOGIN";

    /**
     * 访问拦截标志
     */    /**
 * HTTP ETAG标签
 */
    const HTTP_INTERCEPT_ACL = "HTTP_INTERCEPT_ACL";

    /**
     * HTTP ETAG标签
     */
    const HTTP_CACHE_ETAG = "HTTP_CACHE_ETAG";

    /**
     * HTTP
     */
    const HTTP_USER_AUTH = "HTTP_USER_AUTH";

    /**
     * HTTP请求中用以dispatcher传递数据的参数标签
     */
    const HTTP_PROTOCOL_DATA = "HTTP_PROTOCOL_DATA";

    const DI_SERVICE_SESSION = "DI_SERVICE_SESSION";

    const DI_SERVICE_API = "DI_SERVICE_API";

    const DI_SERVICE_REDIS = "DI_SERVICE_REDIS";

    const DI_SERVICE_LOGGER = "DI_SERVICE_LOGGER";
}