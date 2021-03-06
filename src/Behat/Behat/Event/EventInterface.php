<?php

namespace Behat\Behat\Event;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Core Behat event interface.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface EventInterface
{
    /**
     * Suite & features loading events
     */
    const LOAD_SUITES = 'loadSuites';
    const LOAD_FEATURES = 'loadFeatures';
    /**
     * Context pool creation/initialization events
     */
    const CREATE_CONTEXT_POOL = 'createContextPool';
    const INITIALIZE_CONTEXT_POOL = 'initializeContextPool';
    /**
     * Dictionary loading events
     */
    const LOAD_HOOKS = 'loadHooks';
    const LOAD_DEFINITIONS = 'loadDefinitions';
    const LOAD_TRANSFORMATIONS = 'loadTransformations';
    /**
     * Execution events
     */
    const EXECUTE_CALLEE = 'executeCallee';
    const EXECUTE_DEFINITION = 'executeDefinition';
    const EXECUTE_TRANSFORMATION = 'executeTransformation';
    const EXECUTE_HOOK = 'executeHook';
    /**
     * Dictionary events
     */
    const FIND_DEFINITION = 'findDefinition';
    const CREATE_SNIPPET = 'createSnippet';
    /**
     * Tester creation events
     */
    const CREATE_EXERCISE_TESTER = 'getExerciseTester';
    const CREATE_SUITE_TESTER = 'getSuiteTester';
    const CREATE_FEATURE_TESTER = 'getFeatureTester';
    const CREATE_BACKGROUND_TESTER = 'getBackgroundTester';
    const CREATE_SCENARIO_TESTER = 'getScenarioTester';
    const CREATE_OUTLINE_EXAMPLE_TESTER = 'getOutlineExampleTester';
    const CREATE_STEP_TESTER = 'getStepTester';
    /**
     * Lifecycle events
     */
    const BEFORE_EXERCISE = 'beforeExercise';
    const AFTER_EXERCISE = 'afterExercise';
    const BEFORE_SUITE = 'beforeSuite';
    const AFTER_SUITE = 'afterSuite';
    const BEFORE_FEATURE = 'beforeFeature';
    const AFTER_FEATURE = 'afterFeature';
    const BEFORE_SCENARIO = 'beforeScenario';
    const AFTER_SCENARIO = 'afterScenario';
    const BEFORE_OUTLINE = 'beforeOutline';
    const AFTER_OUTLINE = 'afterOutline';
    const BEFORE_OUTLINE_EXAMPLE = 'beforeOutlineExample';
    const AFTER_OUTLINE_EXAMPLE = 'afterOutlineExample';
    const BEFORE_BACKGROUND = 'beforeBackground';
    const AFTER_BACKGROUND = 'afterBackground';
    const BEFORE_STEP = 'beforeStep';
    const AFTER_STEP = 'afterStep';
    /**
     * Hookable events
     */
    const HOOKABLE_BEFORE_SUITE = 'hookableBeforeSuite';
    const HOOKABLE_AFTER_SUITE = 'hookableAfterSuite';
    const HOOKABLE_BEFORE_FEATURE = 'hookableBeforeFeature';
    const HOOKABLE_AFTER_FEATURE = 'hookableAfterFeature';
    const HOOKABLE_BEFORE_SCENARIO = 'hookableBeforeScenario';
    const HOOKABLE_AFTER_SCENARIO = 'hookableAfterScenario';
    const HOOKABLE_BEFORE_STEP = 'hookableBeforeStep';
    const HOOKABLE_AFTER_STEP = 'hookableAfterStep';
    const BEFORE_HOOK = 'beforeHook';
    const AFTER_HOOK = 'afterHook';
}
