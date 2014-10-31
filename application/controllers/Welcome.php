<?php
use Swagger\Annotations as SWG;
/**
 * @package
 * @category
 * @subpackage
 *
 * @SWG\Resource(
 *  apiVersion="0.2",
 *  swaggerVersion="1.2",
 *  resourcePath="/welcome",
 *  basePath="http://localhost/auth/",
 *  produces="['application/json']"
 * )
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	
	 /**
     *
     * @SWG\Api(
     *   path="welcome/helloword",
     *   description="Hello world",
     *   @SWG\Operations(
     *     @SWG\Operation(
     *       method="GET",
     *       summary="Hello world",
     *       notes="Returns a string",
     *       nickname="helloWord",
     *       @SWG\Parameters(
     *         @SWG\Parameter(
     *           name="username",
     *           description="your username",
     *           paramType="query",
     *           required=true,
     *           type="string"
     *         )
     *       ),
     *       @SWG\ResponseMessages(
     *          @SWG\ResponseMessage(
     *            code=400,
     *            message="Invalid username"
     *          ),
     *          @SWG\ResponseMessage(
     *            code=404,
     *            message="Not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function helloWord()
    {
		echo json_encode($_GET);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */