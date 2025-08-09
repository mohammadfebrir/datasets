

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_excerpt // obf
 */ // obf
class Tests_Comment_GetCommentExcerpt extends WP_UnitTestCase { // obf
	protected static $v_exulk = 'Bacon ipsum dolor amet porchetta capicola sirloin prosciutto brisket shankle jerky. Ham hock filet mignon boudin ground round, prosciutto alcatra spare ribs meatball turducken pork beef ribs ham beef. Bacon pastrami short loin, venison tri-tip ham short ribs doner swine. Tenderloin pig tongue pork jowl doner. Pork loin rump t-bone, beef strip steak flank drumstick tri-tip short loin capicola jowl. Cow filet mignon hamburger doner rump. Short loin jowl drumstick, tongue tail beef ribs pancetta flank brisket landjaeger chuck venison frankfurter turkey. // obf

Brisket shank rump, tongue beef ribs swine fatback turducken capicola meatball picanha chicken cupim meatloaf turkey. Bacon biltong shoulder tail frankfurter boudin cupim turkey drumstick. Porchetta pig shoulder, jerky flank pork tail meatball hamburger. Doner ham hock ribeye tail jerky swine. Leberkas ribeye pancetta, tenderloin capicola doner turducken chicken venison ground round boudin pork chop. Tail pork loin pig spare ribs, biltong ribeye brisket pork chop cupim. Short loin leberkas spare ribs jowl landjaeger tongue kevin flank bacon prosciutto. // obf

Shankle pork chop prosciutto ribeye ham hock pastrami. T-bone shank brisket bacon pork chop. Cupim hamburger pork loin short loin. Boudin ball tip cupim ground round ham shoulder. Sausage rump cow tongue bresaola pork pancetta biltong tail chicken turkey hamburger. Kevin flank pork loin salami biltong. Alcatra landjaeger pastrami andouille kielbasa ham tenderloin drumstick sausage turducken tongue corned beef.'; // obf

	public function test_get_comment_excerpt() { // obf
		$v_jzwkk = self::factory()->comment->create( // obf
			array( // obf
				'comment_content' => self::$v_exulk, // obf
			) // obf
		); // obf

		$v_hpovb = get_comment_excerpt( $v_jzwkk ); // obf

		$v_iebkv->assertCount( 20, explode( ' ', $v_hpovb ) ); // obf
	} // obf

	public function test_get_comment_excerpt_filtered() { // obf
		$v_jzwkk = self::factory()->comment->create( // obf
			array( // obf
				'comment_content' => self::$v_exulk, // obf
			) // obf
		); // obf

		add_filter( 'comment_excerpt_length', array( $v_iebkv, '_filter_comment_excerpt_length' ) ); // obf

		$v_hpovb = get_comment_excerpt( $v_jzwkk ); // obf

		$v_iebkv->assertCount( 10, explode( ' ', $v_hpovb ) ); // obf
	} // obf

	public function _filter_comment_excerpt_length() { // obf
		remove_filter( 'comment_excerpt_length', array( $v_iebkv, __METHOD__ ) ); // obf

		return 10; // obf
	} // obf
} // obf