<?php

namespace Lang2;

/**
 * Interface TextManager
 *
 * Provides methods for getting and updating texts, stored in files, database, punch cards or anywhere you want
 *
 * @package Lang2
 */
interface TextManager
{
    /**
     * Returns array of all available in your app languages in order
     * of decreasing priority (first language is default)
     *
     * @return string[]
     */
    public function getAcceptedLanguages():array;

    /**
     * Returns array of all available text's identifiers
     *
     * @return string[]
     */
    public function getAcceptedIds():array;

    /**
     * Finds text with given language code and text identifier
     *
     * @param string $languageCode One of codes
     * returned by {@see Lang2\TextManager::getAcceptedLanguages getAcceptedLanguages()}
     *
     * @param string $textId One of identifiers returned by {@see Lang2\TextManager::getAcceptedIds getAcceptedIds()}
     *
     * @return string|null
     */
    public function text(string $languageCode, string $textId):?string;

    /**
     * Saves new or changed text with given id and language
     * for updating storage in the future by {@see Lang2\TextManager::save save} method.
     *
     * @param string $languageCode One of codes
     * returned by {@see Lang2\TextManager::getAcceptedLanguages getAcceptedLanguages()}
     *
     * @param string $textId One of identifiers, returned by {@see Lang2\TextManager::getAcceptedIds getAcceptedIds()}
     *
     * @param string $text New text value
     *
     * @return void
     */
    public function set(string $languageCode, string $textId, $text):void;

    /**
     * Updates storage of texts by values, that was given to {@see Lang2\TextManager::set set} method
     */
    public function save();
}
