<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    private $integer;
    private $isOdd;

    private $globalAdminName;
    private $blogName;
    private $customerName;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

     /**
     * @Given the integer :arg1
     */
    public function theInteger($arg1)
    {
        $this->integer = $arg1;
    }

    /**
     * @When the calculator is run
     */
    public function theCalculatorIsRun()
    {
        $this->isOdd = $this->integer % 2 == 1;
    }

    /**
     * @Then we will get an :arg1
     */
    public function weWillGetAn($arg1)
    {
        $result = $this->isOdd ? "odd" : "even";
    }

    /**
     * @Given a global administrator named :arg1
     */
    public function aGlobalAdministratorNamed($arg1)
    {
        $this->globalAdminName = $arg1;
    }

    /**
     * @Given a blog named :arg1
     */
    public function aBlogNamed($arg1)
    {
        $this->blogName = $arg1;
    }

    /**
     * @Given a customer named :arg1
     */
    public function aCustomerNamed($arg1)
    {
        $this->customerName = $arg1;
    }

    /**
     * @Given the following people exist:
     */
    public function theFollowingPeopleExist(TableNode $table)
    {
    }

    /**
     * @Given some precondition :arg1
     */
    public function somePrecondition($arg1)
    {
        
    }

    /**
     * @When some action by the actor
     */
    public function someActionByTheActor()
    {
        
    }

    /**
     * @When some other action
     */
    public function someOtherAction()
    {
        
    }

    /**
     * @Then some testable outcome is achieved
     */
    public function someTestableOutcomeIsAchieved()
    {
        
    }

    /**
     * @Then something else we can check happens too
     */
    public function somethingElseWeCanCheckHappensToo()
    {
        
    }

    /**
     * @Given some precondition
     */
    public function somePrecondition2()
    {
        
    }

    /**
     * @Given some other precondition with doc string
     */
    public function someOtherPreconditionWithDocString(PyStringNode $string)
    {
        
    }

    /**
     * @When yet another action
     */
    public function yetAnotherAction()
    {
        
    }

    /**
     * @Then I don't see something else
     */
    public function iDontSeeSomethingElse()
    {
    }

    /**
     * @Given the cow weighs :arg1 kg
     */
    public function theCowWeighsKg($arg1)
    {
        
    }

    /**
     * @When we calculate the feeding requirements
     */
    public function weCalculateTheFeedingRequirements()
    {
    }

    /**
     * @Then the energy should be :arg1 MJ
     */
    public function theEnergyShouldBeMj($arg1)
    {
        
    }
}
